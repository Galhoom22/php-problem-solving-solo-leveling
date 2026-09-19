<?php

declare(strict_types=1);

/**
 * Hunter Solves First audit — confirm every Gate ships as a stub only.
 */

$root = dirname(__DIR__);
$errors = [];
$warnings = [];
$stubOk = 0;
$gates = 0;
$missingSol = 0;
$cleared = 0;

/** Call-like tokens that should not appear in unsolved stubs (word-boundary aware). */
$callPatterns = [
    '/\bfor\s*\(/i',
    '/\bforeach\s*\(/i',
    '/\bwhile\s*\(/i',
    '/\bdo\s*\{/i',
    '/\barray_map\s*\(/i',
    '/\barray_filter\s*\(/i',
    '/\barray_reduce\s*\(/i',
    '/\barray_walk\s*\(/i',
    '/\busort\s*\(/i',
    '/\buasort\s*\(/i',
    '/\buksort\s*\(/i',
    '/(?<!->)\bsort\s*\(/i',
    '/\brsort\s*\(/i',
    '/\basort\s*\(/i',
    '/\barsort\s*\(/i',
    '/\bksort\s*\(/i',
    '/\bpreg_match\s*\(/i',
    '/\bpreg_replace\s*\(/i',
    '/\bpreg_split\s*\(/i',
    '/\bnew\s+Spl(PriorityQueue|Queue|Stack|MinHeap|MaxHeap|Heap)\b/i',
    '/\barray_diff\s*\(/i',
    '/\barray_intersect\s*\(/i',
    '/\barray_unique\s*\(/i',
    '/\barray_count_values\s*\(/i',
    '/\barray_sum\s*\(/i',
    '/\barray_product\s*\(/i',
    '/\barray_reverse\s*\(/i',
    '/\barray_flip\s*\(/i',
    '/\bstr_split\s*\(/i',
    '/\bstrrev\s*\(/i',
    '/\bstr_contains\s*\(/i',
    '/\bstr_replace\s*\(/i',
    '/\bjson_decode\s*\(/i',
    '/\bjson_encode\s*\(/i',
    '/\bin_array\s*\(/i',
    '/\barray_search\s*\(/i',
    '/\barray_key_exists\s*\(/i',
    '/\bexplode\s*\(/i',
    '/\bimplode\s*\(/i',
    '/\brange\s*\(/i',
    '/\bcount\s*\(/i',
    '/\bstrlen\s*\(/i',
    '/\bisset\s*\(/i',
    '/(?<![\w>])\bmax\s*\(/i',
    '/(?<![\w>])\bmin\s*\(/i',
    '/(?<![\w>])\babs\s*\(/i',
];

function collectGateDirs(string $base): array
{
    if (!is_dir($base)) {
        return [];
    }
    $found = [];
    $it = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($base, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::SELF_FIRST
    );
    foreach ($it as $f) {
        /** @var SplFileInfo $f */
        if ($f->isDir() && preg_match('/^Gate-\d{3}-/', $f->getFilename())) {
            $found[] = $f->getPathname();
        }
    }
    sort($found);

    return $found;
}

function relPath(string $root, string $abs): string
{
    return ltrim(str_replace('\\', '/', substr($abs, strlen($root))), '/');
}

$gateDirs = array_merge(
    collectGateDirs($root . DIRECTORY_SEPARATOR . '02-Problems'),
    collectGateDirs($root . DIRECTORY_SEPARATOR . '04-Interview-Armor')
);

foreach ($gateDirs as $dir) {
    $gates++;
    $rel = relPath($root, $dir);
    $readme = $dir . DIRECTORY_SEPARATOR . 'README.md';
    $sol = $dir . DIRECTORY_SEPARATOR . 'solution-1.php';

    if (!is_file($readme)) {
        $errors[] = "missing README: {$rel}";
        continue;
    }
    $readmeTxt = (string) file_get_contents($readme);
    if (preg_match('/Status:\s*Cleared/i', $readmeTxt)) {
        $cleared++;
        $warnings[] = "Status Cleared: {$rel}";
    }
    if (!preg_match('/Status:\s*Not cleared/i', $readmeTxt) && !preg_match('/Status:\s*Cleared/i', $readmeTxt)) {
        $warnings[] = "no Status line: {$rel}";
    }

    if (!is_file($sol)) {
        $missingSol++;
        $errors[] = "missing solution-1.php: {$rel}";
        continue;
    }

    $src = (string) file_get_contents($sol);
    if (!str_contains($src, 'TODO')) {
        $errors[] = "no TODO (possible spoiler): {$rel}/solution-1.php";
    }
    if (!preg_match('/declare\s*\(\s*strict_types\s*=\s*1\s*\)\s*;/', $src)) {
        $errors[] = "missing strict_types: {$rel}/solution-1.php";
    }

    $stripped = preg_replace('!//.*!m', '', $src) ?? $src;
    $stripped = preg_replace('!/\*.*?\*/!s', '', $stripped) ?? $stripped;

    $hits = [];
    foreach ($callPatterns as $pattern) {
        if (preg_match($pattern, $stripped)) {
            $hits[] = trim($pattern, '/i');
        }
    }
    if ($hits !== []) {
        $errors[] = 'LOOKS SOLVED: ' . $rel . '/solution-1.php';
    } else {
        $stubOk++;
    }

    // Non-default return heuristic: multiple non-trivial returns without TODO nearby is OK if TODO exists
    // Block huge bodies
    if (substr_count($src, "\n") > 100) {
        $warnings[] = 'large stub (' . (substr_count($src, "\n") + 1) . " lines): {$rel}";
    }
}

$extra = [];
$it = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($root, FilesystemIterator::SKIP_DOTS)
);
foreach ($it as $f) {
    /** @var SplFileInfo $f */
    if (!$f->isFile() || $f->getExtension() !== 'php') {
        continue;
    }
    $path = $f->getPathname();
    if (str_contains($path, DIRECTORY_SEPARATOR . '.git' . DIRECTORY_SEPARATOR)) {
        continue;
    }
    if (str_contains($path, DIRECTORY_SEPARATOR . 'scripts' . DIRECTORY_SEPARATOR)) {
        continue;
    }
    $base = $f->getFilename();
    if (preg_match('/^(answer|solution-complete|full-solution|spoiler)\.php$/i', $base)) {
        $extra[] = relPath($root, $path);
    }
    if (preg_match('/^solution-\d+\.php$/', $base) && $base !== 'solution-1.php') {
        $extra[] = relPath($root, $path);
    }
}

$readyMissing = [];
foreach ([
    'README.md', 'playground.php', 'AGENTS.md', 'SOURCES.md', 'CONTRIBUTING.md',
    '00-Awakening/README.md', '01-Patterns-And-Fundamentals/README.md', '02-Problems/README.md',
    '03-Mock-Interview/README.md', '04-Interview-Armor/README.md',
    'scripts/ci/validate-repo.php',
] as $f) {
    if (!is_file($root . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $f))) {
        $readyMissing[] = $f;
    }
}

echo "=== Hunter readiness audit ===\n";
echo "Gates: {$gates}\n";
echo "Clean stubs: {$stubOk}\n";
echo "Missing solution-1.php: {$missingSol}\n";
echo "Status Cleared: {$cleared}\n";
echo "Extra spoiler-named PHP: " . count($extra) . "\n";
echo "Errors: " . count($errors) . "\n";
echo "Warnings: " . count($warnings) . "\n\n";

foreach ($warnings as $w) {
    echo "! {$w}\n";
}
foreach ($errors as $e) {
    echo "✖ {$e}\n";
}
foreach ($extra as $e) {
    echo "✖ extra file: {$e}\n";
}
foreach ($readyMissing as $f) {
    echo "✖ missing ready file: {$f}\n";
}

$fail = $errors !== [] || $extra !== [] || $missingSol > 0 || $readyMissing !== [] || $cleared > 0;
if (!$fail && $stubOk === $gates) {
    echo "\n[OK] Zero solved Gates. All {$gates} Gates are stubs with TODO. Repo is ready — you solve.\n";
    exit(0);
}

echo "\n[FAIL] Fix issues before starting.\n";
exit(1);
