<?php

declare(strict_types=1);

/**
 * Rebuild 02-Problems/README.md Gate map + sync difficulty emoji on every Gate H1.
 *
 * Emoji tracks climb difficulty (lane), not LeetCode Easy/Medium labels:
 *   E 🌱 · D 📗 · C ⚔️ · B 🔥 · A 💎 · S 🌑 · Side 🧭 · Armor 🛡️
 *
 * php scripts/rebuild-gate-map.php
 */

$root = dirname(__DIR__);

/** @return array{E:string,D:string,C:string,B:string,A:string,S:string,Side:string,Armor:string} */
function difficultyEmojiMap(): array
{
    return [
        'E' => '🌱',
        'D' => '📗',
        'C' => '⚔️',
        'B' => '🔥',
        'A' => '💎',
        'S' => '🌑',
        'Side' => '🧭',
        'Armor' => '🛡️',
    ];
}

function laneFromPath(string $path): ?string
{
    $n = str_replace('\\', '/', $path);
    return match (true) {
        str_contains($n, '/01-E-Gates/') => 'E',
        str_contains($n, '/02-D-Gates/') => 'D',
        str_contains($n, '/03-C-Gates/') => 'C',
        str_contains($n, '/04-B-Gates/') => 'B',
        str_contains($n, '/05-A-Gates/') => 'A',
        str_contains($n, '/06-S-Gates/') => 'S',
        str_contains($n, '/07-Side-Quests/') => 'Side',
        str_contains($n, '/04-Interview-Armor/') => 'Armor',
        default => null,
    };
}

function emojiForPath(string $path): string
{
    $lane = laneFromPath($path);
    $map = difficultyEmojiMap();
    return $lane !== null ? ($map[$lane] ?? '❓') : '❓';
}

function gateTitle(string $readmePath, string $fallback): string
{
    if (!is_file($readmePath)) {
        return $fallback;
    }
    $text = (string) file_get_contents($readmePath);
    // Allow optional difficulty emoji between ID and em dash
    if (preg_match('/^#\s+Gate\s+\d{3}(?:\s+\S+)?\s+[—-]\s+(.+)$/mu', $text, $m)) {
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

/** Sync `# Gate NNN EMOJI — Title` on every Gate README. @return int changed count */
function syncGateTitleEmojis(string $root): int
{
    $changed = 0;
    foreach (['02-Problems', '04-Interview-Armor'] as $base) {
        $baseDir = $root . '/' . $base;
        if (!is_dir($baseDir)) {
            continue;
        }
        $it = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($baseDir, FilesystemIterator::SKIP_DOTS)
        );
        foreach ($it as $file) {
            if (!$file->isFile() || $file->getFilename() !== 'README.md') {
                continue;
            }
            if (!str_contains($file->getPathname(), 'Gate-')) {
                continue;
            }
            $path = $file->getPathname();
            $emoji = emojiForPath($path);
            $text = (string) file_get_contents($path);
            if (!preg_match('/^#\s+Gate\s+(\d{3})(?:\s+\S+)?\s+[—-]\s+(.+)$/mu', $text, $m)) {
                continue;
            }
            $id = $m[1];
            $title = trim($m[2]);
            $newH1 = "# Gate {$id} {$emoji} — {$title}";
            $newText = preg_replace(
                '/^#\s+Gate\s+\d{3}(?:\s+\S+)?\s+[—-]\s+.+$/mu',
                $newH1,
                $text,
                1,
                $count
            );
            if ($count === 1 && $newText !== $text) {
                file_put_contents($path, $newText);
                $changed++;
            }
        }
    }
    return $changed;
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
        if (preg_match('#/(01-E-Gates|02-D-Gates|03-C-Gates|04-B-Gates|05-A-Gates|06-S-Gates)/([^/]+)/Gate-#', $rel, $cm)) {
            $category = $cm[2];
        } elseif (preg_match('#/07-Side-Quests/(.+)/Gate-#', $rel, $cm)) {
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
            'emoji' => emojiForPath($file->getPathname()),
        ];
    }
    usort($out, static fn($a, $b) => $a['num'] <=> $b['num']);
    return $out;
}

$emojiSynced = syncGateTitleEmojis($root);
echo "Synced difficulty emoji on {$emojiSynced} Gate README titles\n";

$emoji = difficultyEmojiMap();

$sections = [
    'E' => ['dir' => '02-Problems/01-E-Gates', 'label' => '01-E-Gates', 'intent' => 'Survive — PHP confidence'],
    'D' => ['dir' => '02-Problems/02-D-Gates', 'label' => '02-D-Gates', 'intent' => 'Core Easy'],
    'C' => ['dir' => '02-Problems/03-C-Gates', 'label' => '03-C-Gates', 'intent' => 'Easy → early Medium'],
    'B' => ['dir' => '02-Problems/04-B-Gates', 'label' => '04-B-Gates', 'intent' => 'Main Medium set'],
    'A' => ['dir' => '02-Problems/05-A-Gates', 'label' => '05-A-Gates', 'intent' => 'Stretch'],
    'S' => ['dir' => '02-Problems/06-S-Gates', 'label' => '06-S-Gates', 'intent' => 'Prestige (PHP-fit only)'],
    'Side' => ['dir' => '02-Problems/07-Side-Quests', 'label' => '07-Side-Quests', 'intent' => 'Optional — not graduation-critical'],
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
$totalAll = $totalClimb + count(collectGates($root . '/02-Problems/07-Side-Quests')) + count($armorGates);
$md[] = '| **Bank size** | ' . $totalAll . ' Gate stubs (climb + Side Quests + Interview Armor) |';
$md[] = '| **Order law** | Gate IDs ascend with difficulty: **E → D → C → B → A → S → Side → Armor** |';
$md[] = '| **Start** | [`01-E-Gates/`](01-E-Gates/) — lowest IDs first |';
$md[] = '| **Layout** | `Rank-folder / Pattern-category / Gate-NNN-kebab/` |';
$md[] = '| **Optional** | [`07-Side-Quests/`](07-Side-Quests/) — not graduation-critical |';
$md[] = '| **Armor** | Linked lists / TreeNode → [`../04-Interview-Armor/`](../04-Interview-Armor/) (after S on the ID ladder) |';
$md[] = '';
$md[] = '**How to clear one Gate:** open its `README.md` → **Brief → Brute → Tighten → Talk** (see root [Quick start](../README.md#quick-start)) → fill `solution-1.php` → mark ✅ below → update root Status Window.  ';
$md[] = '';
$md[] = '**Folder name:** `Gate-NNN-kebab-case/` under `Rank/Category/` (example: `02-D-Gates/05-Arrays-Hashing/Gate-080-contains-duplicate/`).';
$md[] = '';
$md[] = '**Category order:** within each rank, numbered folders ascend by skill load (easy drills → core patterns). Gate IDs follow that walk.';
$md[] = '';
$md[] = '---';
$md[] = '';
$md[] = '## Difficulty emoji';
$md[] = '';
$md[] = 'Every Gate title and map row carries a rank emoji (climb heat, not platform labels):';
$md[] = '';
$md[] = '| Emoji | Lane | Feel |';
$md[] = '|:---:|:---|:---|';
$md[] = '| ' . $emoji['E'] . ' | E-Gates | Survive — warmups |';
$md[] = '| ' . $emoji['D'] . ' | D-Gates | Core Easy |';
$md[] = '| ' . $emoji['C'] . ' | C-Gates | Easy → early Medium |';
$md[] = '| ' . $emoji['B'] . ' | B-Gates | Main Medium |';
$md[] = '| ' . $emoji['A'] . ' | A-Gates | Stretch |';
$md[] = '| ' . $emoji['S'] . ' | S-Gates | Prestige |';
$md[] = '| ' . $emoji['Side'] . ' | Side Quests | Optional detour |';
$md[] = '| ' . $emoji['Armor'] . ' | Interview Armor | Lists / trees (late) |';
$md[] = '';
$md[] = '---';
$md[] = '';
$md[] = '## Gate ranks';
$md[] = '';
$md[] = '| | Folder | Min Hunter Rank | Intent | ID range |';
$md[] = '|:---:|:---|:---|:---|:---|';

foreach ($sections as $code => $meta) {
    $list = collectGates($root . '/' . $meta['dir']);
    $range = '—';
    if ($list !== []) {
        $range = sprintf('%03d–%03d', $list[0]['num'], $list[array_key_last($list)]['num']);
    }
    $md[] = sprintf(
        '| %s | [`%s/`](%s/) | %s | %s | %s |',
        $emoji[$code] ?? '❓',
        $meta['label'],
        $meta['label'],
        $code === 'Side' ? 'any' : $code,
        $meta['intent'],
        $range
    );
}
if ($armorGates !== []) {
    $md[] = sprintf(
        '| %s | [`../04-Interview-Armor/`](../04-Interview-Armor/) | B+ | Interview lists/trees | %03d–%03d |',
        $emoji['Armor'],
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
    $md[] = '### ' . ($emoji[$code] ?? '') . ' ' . $meta['label'] . ' (' . count($list) . ')';
    $md[] = '';
    if ($code === 'Side') {
        $md[] = '| Gate | Title | Folder | Platform | XP | Status |';
        $md[] = '|:---|:---|:---|:---|:---:|:---:|';
        foreach ($list as $g) {
            $md[] = sprintf(
                '| %03d %s | %s | `%s` | %s | %s | ☐ |',
                $g['num'],
                $g['emoji'],
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
                '| %03d %s | %s | `%s` | %s | %s | ☐ |',
                $g['num'],
                $g['emoji'],
                $g['title'],
                $g['category'],
                $g['source'] !== '' ? $g['source'] : '—',
                $g['xp'] !== '' ? $g['xp'] : '—'
            );
        }
    }
    $md[] = '';
}

$md[] = '### ' . $emoji['Armor'] . ' Interview Armor (' . count($armorGates) . ')';
$md[] = '';
$md[] = '> Sealed until **B-Rank+** on the PHP-fit climb. IDs follow Side Quests on the global ladder.';
$md[] = '';
$md[] = '| Gate | Title | Part | Platform | XP | Status |';
$md[] = '|:---|:---|:---|:---|:---:|:---:|';
foreach ($armorGates as $g) {
    $md[] = sprintf(
        '| %03d %s | %s | `%s` | %s | %s | ☐ |',
        $g['num'],
        $g['emoji'],
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
