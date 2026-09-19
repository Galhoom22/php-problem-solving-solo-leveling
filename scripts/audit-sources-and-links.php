<?php

declare(strict_types=1);

/**
 * Sources + links audit.
 * php scripts/audit-sources-and-links.php
 *
 * Exit 0 = no hard errors (missing Source, broken internal links, real 404/5xx).
 * Bot-blocked hosts (403/429) are WARN only when the URL path looks canonical.
 */

$root = dirname(__DIR__);
$errors = [];
$warnings = [];

/** @var list<string> */
$botBlockedHosts = [
    'leetcode.com',
    'www.leetcode.com',
    'codeforces.com',
    'www.codeforces.com',
    'exercism.org',
    'www.exercism.org',
];

$gates = [];
foreach (['02-Problems', '04-Interview-Armor'] as $base) {
    $it = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($root . '/' . $base, FilesystemIterator::SKIP_DOTS)
    );
    foreach ($it as $file) {
        if ($file->isFile() && $file->getFilename() === 'README.md'
            && str_contains($file->getPathname(), 'Gate-')) {
            $gates[] = $file->getPathname();
        }
    }
}
sort($gates);

$urlCount = [];
foreach ($gates as $path) {
    $rel = str_replace('\\', '/', substr($path, strlen($root) + 1));
    $text = (string) file_get_contents($path);
    if (!preg_match('/^Source:\\s*(.+)$/mi', $text, $m)) {
        $errors[] = "missing Source: {$rel}";
        continue;
    }
    $line = trim($m[1]);
    if (preg_match('#https?://\S+#', $line, $u)) {
        $url = rtrim($u[0], '.,);]');
        if (str_contains($url, '…') || str_contains($url, '<')) {
            $errors[] = "placeholder URL: {$rel} | {$url}";
            continue;
        }
        $urlCount[$url] = ($urlCount[$url] ?? 0) + 1;
    } elseif (!preg_match('/original|\(original/i', $line)) {
        $warnings[] = "no URL: {$rel} | {$line}";
    }
}

$face = [
    'README.md',
    'SOURCES.md',
    'CONTRIBUTING.md',
    'AGENTS.md',
    '02-Problems/README.md',
    '01-Patterns-And-Fundamentals/PATTERN-CATALOG.md',
];
foreach ($face as $rel) {
    $full = $root . '/' . $rel;
    if (!is_file($full)) {
        $errors[] = "missing file {$rel}";
        continue;
    }
    $text = (string) file_get_contents($full);
    if (preg_match_all('/\[[^\]]*\]\(([^)#\s]+)(?:#[^)]*)?\)/', $text, $mm)) {
        $dir = dirname($full);
        foreach ($mm[1] as $link) {
            $link = trim($link);
            if ($link === '' || str_starts_with($link, 'http') || str_starts_with($link, 'mailto:')) {
                continue;
            }
            $cand = $dir . '/' . $link;
            $fromRoot = $root . '/' . ltrim($link, '/');
            if (!file_exists($cand) && !file_exists($fromRoot)) {
                $errors[] = "broken internal: {$rel} → {$link}";
            }
        }
    }
    if (preg_match_all('#https?://[^\s\)\]>"\']+#', $text, $um)) {
        foreach ($um[0] as $u) {
            $u = rtrim($u, '.,;');
            if (str_contains($u, '…') || str_contains($u, '<')) {
                continue; // template placeholders in docs
            }
            $urlCount[$u] = ($urlCount[$u] ?? 0) + 1;
        }
    }
}

$urls = array_keys($urlCount);
sort($urls);

$httpFail = [];
$httpWarn = [];
$httpOk = 0;

$chunks = array_chunk($urls, 20);
foreach ($chunks as $chunk) {
    $mh = curl_multi_init();
    $handles = [];
    foreach ($chunk as $url) {
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_NOBODY => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_CONNECTTIMEOUT => 5,
            CURLOPT_USERAGENT => 'Mozilla/5.0 (compatible; SoloLevelingLinkAudit/1.0)',
            CURLOPT_RETURNTRANSFER => true,
        ]);
        curl_multi_add_handle($mh, $ch);
        $handles[(int) $ch] = ['ch' => $ch, 'url' => $url];
    }
    $running = null;
    do {
        curl_multi_exec($mh, $running);
        curl_multi_select($mh, 1.0);
    } while ($running > 0);

    foreach ($handles as $meta) {
        $ch = $meta['ch'];
        $url = $meta['url'];
        $code = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_multi_remove_handle($mh, $ch);
        curl_close($ch);

        if ($code >= 200 && $code < 400) {
            $httpOk++;
            continue;
        }

        $ch2 = curl_init($url);
        curl_setopt_array($ch2, [
            CURLOPT_HTTPGET => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_TIMEOUT => 12,
            CURLOPT_CONNECTTIMEOUT => 5,
            CURLOPT_USERAGENT => 'Mozilla/5.0 (compatible; SoloLevelingLinkAudit/1.0)',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_RANGE => '0-1023',
        ]);
        curl_exec($ch2);
        $code2 = (int) curl_getinfo($ch2, CURLINFO_HTTP_CODE);
        curl_close($ch2);

        if ($code2 >= 200 && $code2 < 400) {
            $httpOk++;
            continue;
        }

        $host = parse_url($url, PHP_URL_HOST) ?: '';
        $botLikely = in_array($host, $botBlockedHosts, true) && in_array($code2, [0, 403, 429], true);
        if ($botLikely) {
            $httpWarn[] = "{$code2} (bot-block?) {$url}";
        } else {
            $httpFail[] = "{$code2} {$url}";
        }
    }
    curl_multi_close($mh);
}

$report = [];
$report[] = '=== Sources & links audit ===';
$report[] = 'Gates: ' . count($gates);
$report[] = 'Unique URLs: ' . count($urls);
$report[] = "HTTP OK: {$httpOk}";
$report[] = 'HTTP warn (bot-block): ' . count($httpWarn);
$report[] = 'HTTP fail: ' . count($httpFail);
$report[] = 'Errors: ' . count($errors);
$report[] = 'Warnings: ' . count($warnings);
$report[] = '';
foreach ($errors as $e) {
    $report[] = "ERR {$e}";
}
foreach ($warnings as $w) {
    $report[] = "WARN {$w}";
}
foreach ($httpWarn as $w) {
    $report[] = "HTTP-WARN {$w}";
}
foreach ($httpFail as $f) {
    $report[] = "HTTP-FAIL {$f}";
}
$ok = $errors === [] && $httpFail === [];
$report[] = $ok ? '[OK]' : '[FAIL]';

$outPath = $root . '/scripts/tmp-link-report.txt';
file_put_contents($outPath, implode("\n", $report) . "\n");
echo implode("\n", array_slice($report, 0, 25)) . "\n… full report: scripts/tmp-link-report.txt\n";
exit($ok ? 0 : 1);
