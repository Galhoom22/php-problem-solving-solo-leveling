<?php

declare(strict_types=1);

/**
 * Deep consistency audit vs current rank-folder + Gate layout.
 *
 * Usage:
 *   php scripts/audit-consistency.php
 *   php scripts/audit-consistency.php --links
 */

$root = dirname(__DIR__);
$failOnLinks = in_array('--links', $argv ?? [], true);

$errors = [];
$warnings = [];

$staleNeedles = [
    '02-Problems/E-Gates',
    '02-Problems/D-Gates',
    '02-Problems/C-Gates',
    '02-Problems/B-Gates',
    '02-Problems/A-Gates',
    '02-Problems/S-Gates',
    '02-Problems/Side-Quests',
    '](E-Gates/',
    '](D-Gates/',
    '](C-Gates/',
    '](B-Gates/',
    '](A-Gates/',
    '](S-Gates/',
    '](Side-Quests/',
    '`E-Gates/`',
    '`D-Gates/`',
    '`C-Gates/`',
    '`B-Gates/`',
    '`A-Gates/`',
    '`S-Gates/`',
    '`Side-Quests/`',
    '{E|D|C|B|A|S}-Gates',
    'Gate-052-contains-duplicate',
    'Gate-001-sum-array-elements',
    '01-PHP-Arrays-Basics',
    'solo-leveling-style',
    'GitHub meta',
    'Part-0-PHP-Basics',
    'Part-0-Problem-Solving-Intro',
    '](Milestones/',
    '`Milestones/`',
];

$exts = ['md', 'php', 'yml', 'yaml', 'txt', 'json'];
$it = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($root, FilesystemIterator::SKIP_DOTS)
);

foreach ($it as $file) {
    /** @var SplFileInfo $file */
    if (!$file->isFile()) {
        continue;
    }
    $path = $file->getPathname();
    if (str_contains($path, DIRECTORY_SEPARATOR . '.git' . DIRECTORY_SEPARATOR)) {
        continue;
    }
    if (str_contains($path, DIRECTORY_SEPARATOR . '.cursor' . DIRECTORY_SEPARATOR)) {
        continue;
    }
    if ($file->getFilename() === 'audit-consistency.php') {
        continue;
    }

    $ext = strtolower($file->getExtension());
    $base = $file->getFilename();
    if (!in_array($ext, $exts, true) && !in_array($base, ['LICENSE', 'AGENTS.md', 'CODEOWNERS'], true)) {
        continue;
    }

    $text = (string) file_get_contents($path);
    $rel = ltrim(str_replace('\\', '/', substr($path, strlen($root))), '/');

    foreach ($staleNeedles as $needle) {
        if (str_contains($text, $needle)) {
            $errors[] = "[stale] {$rel} still contains: {$needle}";
        }
    }

    // Unprefixed rank folder as path segment (but allow "E-Gates" prose without slash in Status Window already fixed)
    if (preg_match('#(?<!\\d{2}-)(?<!/)([EDCBAS]-Gates|Side-Quests)/#', $text)) {
        // Ignore matches that are actually 01-E-Gates etc — lookbehind handles digits
        // Also ignore audit script itself (already skipped)
        if (preg_match_all('#(?<!\\d{2}-)([EDCBAS]-Gates|Side-Quests)/#', $text, $mm, PREG_OFFSET_CAPTURE)) {
            foreach ($mm[0] as $hit) {
                $snippet = $hit[0];
                // skip if preceded by NN- already caught by lookbehind; double-check context
                $pos = $hit[1];
                $before = $pos >= 3 ? substr($text, $pos - 3, 3) : '';
                if (preg_match('/\\d{2}-$/', $before) === 1) {
                    continue;
                }
                $errors[] = "[stale-path] {$rel} has unprefixed rank path: {$snippet}";
            }
        }
    }

    if ($ext !== 'md') {
        continue;
    }

    if (!preg_match_all('/\\[[^\\]]*\\]\\(([^)#\\s]+)(?:#[^)]*)?\\)/', $text, $m)) {
        continue;
    }

    $dir = dirname($path);
    foreach ($m[1] as $link) {
        $link = trim($link);
        if ($link === '' || str_starts_with($link, 'http') || str_starts_with($link, 'mailto:') || str_starts_with($link, '#')) {
            continue;
        }
        // strip optional title in quotes after path (rare)
        $linkPath = preg_replace('/\\s+".*"$/', '', $link) ?? $link;

        $candidate = $dir . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $linkPath);
        $ok = file_exists($candidate);
        if (!$ok) {
            $fromRoot = $root . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, ltrim($linkPath, '/'));
            $ok = file_exists($fromRoot);
        }
        if (!$ok) {
            $msg = "[link] {$rel} → missing: {$linkPath}";
            if ($failOnLinks) {
                $errors[] = $msg;
            } else {
                $warnings[] = $msg;
            }
        }
    }
}

$requiredDirs = [
    '02-Problems/01-E-Gates',
    '02-Problems/02-D-Gates',
    '02-Problems/03-C-Gates',
    '02-Problems/04-B-Gates',
    '02-Problems/05-A-Gates',
    '02-Problems/06-S-Gates',
    '02-Problems/07-Side-Quests',
    '02-Problems/01-E-Gates/01-Numbers/Gate-001-sum-two-numbers',
    '02-Problems/02-D-Gates/05-Arrays-Hashing/Gate-080-contains-duplicate',
    '00-Awakening/Part-01-PHP-Basics',
    '00-Awakening/Part-02-Problem-Solving-Intro',
    '01-Patterns-And-Fundamentals/Part-4-Milestones',
    '.github/workflows',
    '.github/pending-workflows',
];
foreach ($requiredDirs as $d) {
    $full = $root . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $d);
    if (!is_dir($full)) {
        $errors[] = "[missing-dir] {$d}";
    }
}

foreach (['E-Gates', 'D-Gates', 'C-Gates', 'B-Gates', 'A-Gates', 'S-Gates', 'Side-Quests'] as $old) {
    if (is_dir($root . DIRECTORY_SEPARATOR . '02-Problems' . DIRECTORY_SEPARATOR . $old)) {
        $errors[] = "[old-dir] 02-Problems/{$old} still exists";
    }
}

$map = (string) file_get_contents($root . '/02-Problems/README.md');
if (!str_contains($map, '01-E-Gates')) {
    $errors[] = '[map] 02-Problems/README.md missing 01-E-Gates';
}
if (!preg_match('/\\|\\s*001\\s*\\|\\s*Sum of Two Numbers\\s*\\|/', $map)) {
    $errors[] = '[map] Gate 001 should be Sum of Two Numbers';
}
if (!preg_match('/\\|\\s*080\\s*\\|\\s*Contains Duplicate\\s*\\|/', $map)) {
    $errors[] = '[map] Gate 080 should be Contains Duplicate';
}

$readme = (string) file_get_contents($root . '/README.md');
foreach (['01-E-Gates', 'Gate-001-sum-two-numbers', 'STATUS WINDOW', 'Hunter Solves First', '00-Awakening', 'Arise'] as $n) {
    if (!str_contains($readme, $n)) {
        $errors[] = "[readme] missing signal/path: {$n}";
    }
}

$agents = (string) file_get_contents($root . '/AGENTS.md');
if (!str_contains($agents, '.github/workflows/ci.yml') && !str_contains($agents, 'workflows/ci.yml')) {
    $warnings[] = '[agents] AGENTS.md should point at live .github/workflows/ci.yml';
}

echo "=== Consistency audit ===\n";
echo 'Errors: ' . count($errors) . "\n";
echo 'Warnings: ' . count($warnings) . "\n";
foreach ($errors as $e) {
    echo "  ✖ {$e}\n";
}
foreach (array_slice($warnings, 0, 40) as $w) {
    echo "  ! {$w}\n";
}
if (count($warnings) > 40) {
    echo '  ! … +' . (count($warnings) - 40) . " more warnings\n";
}

if ($errors === []) {
    echo "[OK] No hard consistency failures.\n";
    exit(0);
}

echo "[FAIL] Fix errors above.\n";
exit(1);
