<?php

declare(strict_types=1);

/**
 * Rebuild 02-Problems/README.md Gate map in Strict Progression order (by rank).
 */

$root = dirname(__DIR__);

function gateTitle(string $readmePath, string $fallback): string
{
    if (!is_file($readmePath)) {
        return $fallback;
    }
    $text = (string) file_get_contents($readmePath);
    if (preg_match('/^#\s+Gate\s+\d{3}\s+[—-]\s+(.+)$/mu', $text, $m)) {
        return trim($m[1]);
    }
    return $fallback;
}

function gateField(string $readmePath, string $label): string
{
    if (!is_file($readmePath)) {
        return '';
    }
    $text = (string) file_get_contents($readmePath);
    if (preg_match('/' . preg_quote($label, '/') . '\s*(.+)$/mi', $text, $m)) {
        return trim($m[1]);
    }
    return '';
}

function collectGates(string $baseDir): array
{
    $out = [];
    if (!is_dir($baseDir)) {
        return $out;
    }
    $it = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($baseDir, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::SELF_FIRST
    );
    foreach ($it as $file) {
        if (!$file->isDir()) {
            continue;
        }
        $name = $file->getFilename();
        if (!preg_match('/^Gate-(\d{3})-(.+)$/', $name, $m)) {
            continue;
        }
        $readme = $file->getPathname() . DIRECTORY_SEPARATOR . 'README.md';
        $slug = $m[2];
        $title = gateTitle($readme, str_replace('-', ' ', $slug));
        $xp = gateField($readme, 'XP Reward:');
        $xp = preg_replace('/[^\d]/', '', $xp) ?: '';
        $source = '';
        if (is_file($readme)) {
            $t = (string) file_get_contents($readme);
            if (preg_match('/^Source:\s*(.+)$/mi', $t, $sm)) {
                $source = trim($sm[1]);
                // shorten
                if (preg_match('#https?://([^/\s]+)#', $source, $hm)) {
                    $host = $hm[1];
                    $source = match (true) {
                        str_contains($host, 'leetcode') => 'LeetCode',
                        str_contains($host, 'codewars') => 'Codewars',
                        str_contains($host, 'w3schools') => 'W3Schools',
                        str_contains($host, 'edabit') => 'Edabit',
                        str_contains($host, 'hackerrank') => 'HackerRank',
                        str_contains($host, 'exercism') => 'Exercism',
                        str_contains($host, 'w3resource') => 'w3resource',
                        str_contains($host, 'codechef') => 'CodeChef',
                        str_contains($host, 'codeforces') => 'Codeforces',
                        default => $host,
                    };
                } elseif (stripos($source, 'original') !== false) {
                    $source = 'Original';
                }
            }
        }
        $rel = str_replace('\\', '/', $file->getPathname());
        $category = '';
        if (preg_match('#/(E-Gates|D-Gates|C-Gates|B-Gates|A-Gates|S-Gates)/([^/]+)/Gate-#', $rel, $cm)) {
            $category = $cm[2];
        } elseif (preg_match('#/Side-Quests/(.+)/Gate-#', $rel, $cm)) {
            $category = $cm[1];
        } elseif (preg_match('#/04-Interview-Armor/(Part-[^/]+)/#', $rel, $cm)) {
            $category = $cm[1];
        }
        $out[] = [
            'num' => (int) $m[1],
            'slug' => $slug,
            'title' => $title,
            'xp' => $xp,
            'source' => $source,
            'category' => $category,
            'path' => $file->getPathname(),
        ];
    }
    usort($out, static fn($a, $b) => $a['num'] <=> $b['num']);
    return $out;
}

$sections = [
    'E' => ['dir' => '02-Problems/E-Gates', 'label' => 'E-Gates', 'intent' => 'Survive — PHP confidence'],
    'D' => ['dir' => '02-Problems/D-Gates', 'label' => 'D-Gates', 'intent' => 'Core Easy'],
    'C' => ['dir' => '02-Problems/C-Gates', 'label' => 'C-Gates', 'intent' => 'Easy → early Medium'],
    'B' => ['dir' => '02-Problems/B-Gates', 'label' => 'B-Gates', 'intent' => 'Main Medium set'],
    'A' => ['dir' => '02-Problems/A-Gates', 'label' => 'A-Gates', 'intent' => 'Stretch'],
    'S' => ['dir' => '02-Problems/S-Gates', 'label' => 'S-Gates', 'intent' => 'Prestige (PHP-fit only)'],
    'Side' => ['dir' => '02-Problems/Side-Quests', 'label' => 'Side-Quests', 'intent' => 'Optional — not graduation-critical'],
];

$armorGates = collectGates($root . '/04-Interview-Armor');

$md = [];
$md[] = '# Track 2 — Gates (Problems Bank)';
$md[] = '';
$md[] = '> Learn + Solve. Every folder is a **Gate**. Enter only Gates at or below your Hunter Rank.';
$md[] = '';
$md[] = '**Spoiler rule:** no finished solutions ship by default. You create `solution-1.php`.';
$md[] = '';
$md[] = '### At a glance';
$md[] = '';
$md[] = '| | |';
$md[] = '|:---|:---|';
$totalClimb = 0;
foreach ($sections as $code => $meta) {
    $n = count(collectGates($root . '/' . $meta['dir']));
    if ($code !== 'Side') {
        $totalClimb += $n;
    }
}
$totalAll = $totalClimb + count(collectGates($root . '/02-Problems/Side-Quests')) + count($armorGates);
$md[] = '| **Bank size** | ' . $totalAll . ' Gate stubs (climb + Side Quests + Interview Armor) |';
$md[] = '| **Order law** | Gate IDs ascend with difficulty: **E → D → C → B → A → S → Side → Armor** |';
$md[] = '| **Start** | [`E-Gates/`](E-Gates/) — lowest IDs first |';
$md[] = '| **Layout** | `Rank-folder / Pattern-category / Gate-NNN-kebab/` |';
$md[] = '| **Optional** | [`Side-Quests/`](Side-Quests/) — not graduation-critical |';
$md[] = '| **Armor** | Linked lists / TreeNode → [`../04-Interview-Armor/`](../04-Interview-Armor/) (after S on the ID ladder) |';
$md[] = '';
$md[] = '**How to clear one Gate:** open its `README.md` → fill `solution-1.php` → mark ✅ below → update root Status Window.';
$md[] = '';
$md[] = '---';
$md[] = '';
$md[] = '## Gate ranks';
$md[] = '';
$md[] = '| Folder | Min Hunter Rank | Intent | ID range |';
$md[] = '|:---|:---|:---|:---|';

foreach ($sections as $code => $meta) {
    $list = collectGates($root . '/' . $meta['dir']);
    $range = '—';
    if ($list !== []) {
        $range = sprintf('%03d–%03d', $list[0]['num'], $list[array_key_last($list)]['num']);
    }
    $md[] = sprintf(
        '| [`%s/`](%s/) | %s | %s | %s |',
        $meta['label'],
        $meta['label'],
        $code === 'Side' ? 'any' : $code,
        $meta['intent'],
        $range
    );
}
if ($armorGates !== []) {
    $md[] = sprintf(
        '| [`../04-Interview-Armor/`](../04-Interview-Armor/) | B+ | Interview lists/trees | %03d–%03d |',
        $armorGates[0]['num'],
        $armorGates[array_key_last($armorGates)]['num']
    );
}

$md[] = '';
$md[] = '## Gate Source Map (progression order)';
$md[] = '';
$md[] = '> **Dedup rule:** one problem idea → one climb Gate. Dual platform Sources are OK.  ';
$md[] = '> Related-but-distinct Gates stay separate and link each other (`## Related Gates`).  ';
$md[] = '> Interview-form twins live in `04-Interview-Armor/` (not a second core Gate).  ';
$md[] = '> **IDs are sequential by rank** — not by import wave.';
$md[] = '';

foreach ($sections as $code => $meta) {
    $list = collectGates($root . '/' . $meta['dir']);
    $md[] = '### ' . $meta['label'] . ' (' . count($list) . ')';
    $md[] = '';
    if ($code === 'Side') {
        $md[] = '| Gate | Title | Folder | Platform | XP | Status |';
        $md[] = '|:---|:---|:---|:---|:---:|:---:|';
        foreach ($list as $g) {
            $md[] = sprintf(
                '| %03d | %s | `%s` | %s | %s | ☐ |',
                $g['num'],
                $g['title'],
                $g['category'],
                $g['source'] !== '' ? $g['source'] : '—',
                $g['xp'] !== '' ? $g['xp'] : '—'
            );
        }
    } else {
        $md[] = '| Gate | Title | Category | Platform | XP | Status |';
        $md[] = '|:---|:---|:---|:---|:---:|:---:|';
        foreach ($list as $g) {
            $md[] = sprintf(
                '| %03d | %s | `%s` | %s | %s | ☐ |',
                $g['num'],
                $g['title'],
                $g['category'],
                $g['source'] !== '' ? $g['source'] : '—',
                $g['xp'] !== '' ? $g['xp'] : '—'
            );
        }
    }
    $md[] = '';
}

$md[] = '### Interview Armor (' . count($armorGates) . ')';
$md[] = '';
$md[] = '> Sealed until **B-Rank+** on the PHP-fit climb. IDs follow Side Quests on the global ladder.';
$md[] = '';
$md[] = '| Gate | Title | Part | Platform | XP | Status |';
$md[] = '|:---|:---|:---|:---|:---:|:---:|';
foreach ($armorGates as $g) {
    $md[] = sprintf(
        '| %03d | %s | `%s` | %s | %s | ☐ |',
        $g['num'],
        $g['title'],
        $g['category'],
        $g['source'] !== '' ? $g['source'] : 'LeetCode',
        $g['xp'] !== '' ? $g['xp'] : '—'
    );
}
$md[] = '';
$md[] = '## Session cycle';
$md[] = '';
$md[] = '1. Confirm Rank unlock  ';
$md[] = '2. Read System Brief + Learn First  ';
$md[] = '3. Attempt alone  ';
$md[] = '4. Coach only if stuck (`repo-ideas/21-…`)  ';
$md[] = '5. CHECK → mark ✅ → XP → update Status Window  ';
$md[] = '';
$md[] = '## Before Instant Dungeons (Track 3)';
$md[] = '';
$md[] = 'Usually needs **B-Rank+** and core E/D/C/B clears in order.';
$md[] = '';

$path = $root . '/02-Problems/README.md';
file_put_contents($path, implode("\n", $md));
echo "Wrote {$path} (" . count($md) . " lines)\n";
echo "Total gates mapped: {$totalAll}\n";
