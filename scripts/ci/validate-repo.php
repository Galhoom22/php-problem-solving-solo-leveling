<?php

declare(strict_types=1);

/**
 * CI validator — enforces Solo Leveling PHP gym laws.
 *
 * Exit 0 = pass · Exit 1 = fail
 *
 * Laws covered:
 * - Required track structure
 * - PHP strict_types + syntax
 * - Gate README required sections (Learn First, Backend Link, Source, ranks)
 * - Strict Progression Law (Gate folders only under E/D/C/B/A/S or Side-Quests)
 * - PHP Fitness Filter bans in early core climb (E/D/C)
 * - Hunter Solves First: no sealed-spoiler dumps in default Gate paths
 * - Sacred root files must exist
 * - English-only law: all tracked prose/code letters must be Latin (English repo)
 */

final class RepoValidator
{
    private string $root;

    /** @var list<string> */
    private array $errors = [];

    /** @var list<string> */
    private array $warnings = [];

    private const REQUIRED_ROOT_FILES = [
        'README.md',
        'SOURCES.md',
        'SYSTEM-LOG.md',
        'AGENTS.md',
        'CONTRIBUTING.md',
        'playground.php',
    ];

    private const REQUIRED_TRACKS = [
        '00-Awakening',
        '01-Patterns-And-Fundamentals',
        '02-Problems',
        '03-Mock-Interview',
        '04-Interview-Armor',
        'repo-ideas',
    ];

    private const GATE_RANKS = ['E-Gates', 'D-Gates', 'C-Gates', 'B-Gates', 'A-Gates', 'S-Gates', 'Side-Quests'];

    /** Early PHP-fit core — linked-list pointer theater forbidden here */
    private const EARLY_CORE_RANKS = ['E-Gates', 'D-Gates', 'C-Gates'];

    private const GATE_README_REQUIRED = [
        '## System Brief',
        '## Learn First',
        '## Backend Link',
        '## Source',
        'Gate Rank:',
        'Min Hunter Rank:',
        'XP Reward:',
    ];

    /** @var list<string> */
    private const FORBIDDEN_CORE_MARKERS = [
        'class ListNode',
        'LinkedList',
        'linked list pointer',
        'Fenwick',
        'SegmentTree',
        'UnionFind',
        'DisjointSet',
    ];

    /** @var list<string> */
    private const ENGLISH_SCAN_EXTENSIONS = [
        'md', 'php', 'yml', 'yaml', 'txt', 'json', 'xml', 'html', 'css', 'js', 'ts', 'sh', 'ps1',
    ];

    /** @var list<string> */
    private const ENGLISH_SCAN_BASENAMES = [
        'LICENSE',
        'CODEOWNERS',
        'Dockerfile',
        'Makefile',
    ];

    public function __construct(string $root)
    {
        $this->root = rtrim($root, '/\\');
    }

    public function run(): int
    {
        $this->checkSacredRootFiles();
        $this->checkRequiredTracks();
        $this->checkProblemsRankFolders();
        $this->checkPhpFiles();
        $this->checkGates();
        $this->checkNoOpenSpoilers();
        $this->checkRepoIdeasBootFiles();
        $this->checkEnglishOnly();

        $this->printReport();

        return $this->errors === [] ? 0 : 1;
    }

    private function checkSacredRootFiles(): void
    {
        foreach (self::REQUIRED_ROOT_FILES as $file) {
            if (!is_file($this->root . DIRECTORY_SEPARATOR . $file)) {
                $this->errors[] = "[structure] Missing sacred root file: {$file}";
            }
        }

        $readme = $this->read('README.md');
        if ($readme !== null) {
            foreach (['STATUS WINDOW', 'Hunter Rank', 'Arise', '00-Awakening', 'Hunter Solves First'] as $needle) {
                if (stripos($readme, $needle) === false) {
                    $this->errors[] = "[readme] Root README.md missing required signal: {$needle}";
                }
            }
        }
    }

    private function checkRequiredTracks(): void
    {
        foreach (self::REQUIRED_TRACKS as $track) {
            $path = $this->root . DIRECTORY_SEPARATOR . $track;
            if (!is_dir($path)) {
                $this->errors[] = "[structure] Missing required track/folder: {$track}";
                continue;
            }
            if (!is_file($path . DIRECTORY_SEPARATOR . 'README.md')) {
                $this->errors[] = "[structure] Missing README.md in {$track}/";
            }
        }
    }

    private function checkProblemsRankFolders(): void
    {
        $problems = $this->root . DIRECTORY_SEPARATOR . '02-Problems';
        if (!is_dir($problems)) {
            return;
        }

        foreach (self::GATE_RANKS as $rank) {
            $dir = $problems . DIRECTORY_SEPARATOR . $rank;
            if (!is_dir($dir)) {
                $this->errors[] = "[progression] Missing Gate rank folder: 02-Problems/{$rank}";
            }
        }

        // Unexpected top-level folders under 02-Problems break Strict Progression Law clarity
        foreach ($this->listDirs($problems) as $child) {
            $name = basename($child);
            if ($name === '.' || $name === '..') {
                continue;
            }
            if (!in_array($name, self::GATE_RANKS, true) && $name !== 'README.md') {
                // only dirs
                if (is_dir($child) && !in_array($name, self::GATE_RANKS, true)) {
                    $this->errors[] = "[progression] Unexpected folder under 02-Problems/: {$name} (use E–S Gates or Side-Quests only)";
                }
            }
        }
    }

    private function checkPhpFiles(): void
    {
        foreach ($this->phpFiles() as $file) {
            $rel = $this->rel($file);
            $src = (string) file_get_contents($file);

            if (!str_starts_with(ltrim($src), '<?php')) {
                $this->errors[] = "[php] Must start with <?php: {$rel}";
            }

            if (!preg_match('/declare\s*\(\s*strict_types\s*=\s*1\s*\)\s*;/', $src)) {
                $this->errors[] = "[php] Missing declare(strict_types=1); — {$rel}";
            }

            // Syntax check
            $cmd = 'php -l ' . escapeshellarg($file) . ' 2>&1';
            $out = [];
            $code = 0;
            exec($cmd, $out, $code);
            if ($code !== 0) {
                $this->errors[] = "[php] Syntax error in {$rel}: " . implode(' ', $out);
            }
        }
    }

    private function checkGates(): void
    {
        $gateDirs = $this->gateDirs();

        foreach ($gateDirs as $gateDir) {
            $rel = $this->rel($gateDir);
            $readmePath = $gateDir . DIRECTORY_SEPARATOR . 'README.md';
            $solutionPath = $gateDir . DIRECTORY_SEPARATOR . 'solution-1.php';

            if (!is_file($readmePath)) {
                $this->errors[] = "[gate] Missing README.md: {$rel}";
                continue;
            }

            $readme = (string) file_get_contents($readmePath);

            foreach (self::GATE_README_REQUIRED as $required) {
                if (stripos($readme, $required) === false) {
                    $this->errors[] = "[gate] {$rel}/README.md missing section/field: {$required}";
                }
            }

            // Source must include a URL or explicit (original) marker
            if (!preg_match('/Source:\s*.+/i', $readme)) {
                $this->errors[] = "[gate] {$rel}/README.md missing Source: line";
            } elseif (
                !preg_match('#https?://#i', $readme)
                && stripos($readme, '(original') === false
            ) {
                $this->warnings[] = "[gate] {$rel}/README.md Source has no URL — OK only for original warmups";
            }

            // Folder naming: Gate-NNN-kebab
            $base = basename($gateDir);
            if (!preg_match('/^Gate-\d{3}-[a-z0-9]+(?:-[a-z0-9]+)*$/', $base)) {
                $this->errors[] = "[gate] Bad folder name (expect Gate-NNN-kebab-case): {$rel}";
            }

            // Rank consistency: Gate Rank letter must match parent E/D/C/B/A/S folder
            if (preg_match('/Gate Rank:\s*([EDCBAS])/i', $readme, $m)) {
                $rankLetter = strtoupper($m[1]);
                $parentRank = $this->parentGateRank($gateDir);
                if ($parentRank !== null && $parentRank !== 'Side-Quests') {
                    $expected = substr($parentRank, 0, 1); // E from E-Gates
                    if ($rankLetter !== $expected) {
                        $this->errors[] = "[progression] {$rel}: Gate Rank {$rankLetter} does not match folder {$parentRank}";
                    }
                }
            }

            // Fitness filter: early core bans
            $parentRank = $this->parentGateRank($gateDir);
            if ($parentRank !== null && in_array($parentRank, self::EARLY_CORE_RANKS, true)) {
                $blob = $readme;
                if (is_file($solutionPath)) {
                    $blob .= "\n" . file_get_contents($solutionPath);
                }
                foreach (self::FORBIDDEN_CORE_MARKERS as $marker) {
                    if (stripos($blob, $marker) !== false) {
                        $this->errors[] = "[fitness] {$rel}: forbidden in early PHP-fit core ({$parentRank}): {$marker} — move to Side-Quests or 04-Interview-Armor";
                    }
                }
            }

            // Stub policy for shipped solution-1.php when Status is Not cleared
            if (is_file($solutionPath)) {
                $sol = (string) file_get_contents($solutionPath);
                $notCleared = (bool) preg_match('/Status:\s*Not cleared/i', $readme);
                $hasTodo = str_contains($sol, 'TODO');

                if ($notCleared && !$hasTodo) {
                    // Allow hunter progress on cleared path; when still Not cleared, prefer stub
                    $this->warnings[] = "[spoiler] {$rel}: Status is Not cleared but solution-1.php has no TODO — keep stubs until hunter clears (or mark Status: Cleared)";
                }
            }
        }
    }

    private function checkNoOpenSpoilers(): void
    {
        $bannedNames = [
            'spoilers',
            'spoiler',
            'official-solutions',
            'official_solutions',
            'answers',
            'full-solutions',
        ];

        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($this->root, FilesystemIterator::SKIP_DOTS)
        );

        foreach ($iterator as $fileInfo) {
            /** @var SplFileInfo $fileInfo */
            $path = $fileInfo->getPathname();
            if (str_contains($path, DIRECTORY_SEPARATOR . '.git' . DIRECTORY_SEPARATOR)) {
                continue;
            }

            $name = strtolower($fileInfo->getFilename());

            if ($fileInfo->isDir() && in_array($name, $bannedNames, true)) {
                // Allowed only under 04-Interview-Armor if clearly sealed — still warn; fail under 02-Problems
                $rel = $this->rel($path);
                if (str_starts_with($rel, '02-Problems' . DIRECTORY_SEPARATOR) || str_starts_with($rel, '02-Problems/')) {
                    $this->errors[] = "[spoiler] Open spoilers folder not allowed under Gates: {$rel}";
                } else {
                    $this->warnings[] = "[spoiler] Spoiler-named folder found: {$rel} — keep sealed and never default path";
                }
            }

            if ($fileInfo->isFile()) {
                $base = strtolower($fileInfo->getBasename());
                if (preg_match('/^(answer|solution-complete|full-solution|spoiler)\.php$/', $base)) {
                    $this->errors[] = "[spoiler] Forbidden spoiler filename: " . $this->rel($path);
                }
            }
        }
    }

    private function checkRepoIdeasBootFiles(): void
    {
        foreach ([
            'repo-ideas/00-mission-learn-and-solve.md',
            'repo-ideas/21-hunter-solves-first-no-direct-answers.md',
            'repo-ideas/19-php-fitness-filter.md',
            'repo-ideas/20-big-tech-faang-graduation.md',
            'repo-ideas/03-strict-progression-law.md',
            'repo-ideas/22-english-only.md',
            'repo-ideas/23-professionalism-ratchet.md',
        ] as $file) {
            if (!is_file($this->root . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $file))) {
                $this->errors[] = "[design] Missing law file: {$file}";
            }
        }
    }

    /**
     * English-only law: every Unicode letter in scanned files must be Latin script.
     * Symbols, emoji, box-drawing, digits, and punctuation are allowed.
     * Chat may be any language; committed repo content must stay English.
     */
    private function checkEnglishOnly(): void
    {
        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($this->root, FilesystemIterator::SKIP_DOTS)
        );

        $maxHits = 25;
        $hitCount = 0;

        foreach ($iterator as $fileInfo) {
            /** @var SplFileInfo $fileInfo */
            if (!$fileInfo->isFile()) {
                continue;
            }

            $path = $fileInfo->getPathname();
            if (str_contains($path, DIRECTORY_SEPARATOR . '.git' . DIRECTORY_SEPARATOR)) {
                continue;
            }
            if (str_contains($path, DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR)) {
                continue;
            }

            $base = $fileInfo->getFilename();
            $ext = strtolower($fileInfo->getExtension());
            $scan = in_array($base, self::ENGLISH_SCAN_BASENAMES, true)
                || in_array($ext, self::ENGLISH_SCAN_EXTENSIONS, true);
            if (!$scan) {
                continue;
            }

            $rel = $this->rel($path);

            // Paths/filenames must also stay English (Latin letters only if any letters)
            if ($this->containsNonLatinLetter($rel)) {
                $this->errors[] = "[english] Non-English letter(s) in path: {$rel}";
                $hitCount++;
                if ($hitCount >= $maxHits) {
                    $this->errors[] = "[english] Further English-law path violations truncated…";
                    break;
                }
            }

            $content = (string) file_get_contents($path);
            if (!$this->containsNonLatinLetter($content)) {
                continue;
            }

            $sample = $this->firstNonLatinLetter($content);
            $this->errors[] = "[english] Non-English letter(s) in file: {$rel}"
                . ($sample !== null ? " (example: \"{$sample}\")" : '');
            $hitCount++;
            if ($hitCount >= $maxHits) {
                $this->errors[] = "[english] Further English-law file violations truncated…";
                break;
            }
        }
    }

    private function containsNonLatinLetter(string $text): bool
    {
        if (preg_match_all('/\p{L}/u', $text, $matches) === false || $matches[0] === []) {
            return false;
        }

        foreach ($matches[0] as $letter) {
            if (preg_match('/\p{Latin}/u', $letter) !== 1) {
                return true;
            }
        }

        return false;
    }

    private function firstNonLatinLetter(string $text): ?string
    {
        if (preg_match_all('/\p{L}/u', $text, $matches) === false) {
            return null;
        }

        foreach ($matches[0] as $letter) {
            if (preg_match('/\p{Latin}/u', $letter) !== 1) {
                return $letter;
            }
        }

        return null;
    }

    /** @return list<string> */
    private function gateDirs(): array
    {
        $problems = $this->root . DIRECTORY_SEPARATOR . '02-Problems';
        if (!is_dir($problems)) {
            return [];
        }

        $found = [];
        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($problems, FilesystemIterator::SKIP_DOTS),
            RecursiveIteratorIterator::SELF_FIRST
        );

        foreach ($iterator as $fileInfo) {
            /** @var SplFileInfo $fileInfo */
            if ($fileInfo->isDir() && preg_match('/^Gate-\d{3}-/', $fileInfo->getFilename())) {
                $found[] = $fileInfo->getPathname();
            }
        }

        sort($found);

        return $found;
    }

    /** @return list<string> */
    private function phpFiles(): array
    {
        $found = [];
        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($this->root, FilesystemIterator::SKIP_DOTS)
        );

        foreach ($iterator as $fileInfo) {
            /** @var SplFileInfo $fileInfo */
            $path = $fileInfo->getPathname();
            if (!$fileInfo->isFile() || $fileInfo->getExtension() !== 'php') {
                continue;
            }
            if (str_contains($path, DIRECTORY_SEPARATOR . '.git' . DIRECTORY_SEPARATOR)) {
                continue;
            }
            // skip vendor if ever added
            if (str_contains($path, DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR)) {
                continue;
            }
            $found[] = $path;
        }

        sort($found);

        return $found;
    }

    /** @return list<string> */
    private function listDirs(string $path): array
    {
        $dirs = [];
        foreach (scandir($path) ?: [] as $item) {
            if ($item === '.' || $item === '..') {
                continue;
            }
            $full = $path . DIRECTORY_SEPARATOR . $item;
            if (is_dir($full)) {
                $dirs[] = $full;
            }
        }

        return $dirs;
    }

    private function parentGateRank(string $gateDir): ?string
    {
        $normalized = str_replace('\\', '/', $gateDir);
        if (preg_match('#/02-Problems/(E-Gates|D-Gates|C-Gates|B-Gates|A-Gates|S-Gates|Side-Quests)/#', $normalized, $m)) {
            return $m[1];
        }

        return null;
    }

    private function read(string $rel): ?string
    {
        $path = $this->root . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $rel);
        if (!is_file($path)) {
            return null;
        }

        return (string) file_get_contents($path);
    }

    private function rel(string $abs): string
    {
        return ltrim(str_replace('\\', '/', substr($abs, strlen($this->root))), '/');
    }

    private function printReport(): void
    {
        echo "══════════════════════════════════════════\n";
        echo "  SYSTEM CI — Repo Law Validation\n";
        echo "══════════════════════════════════════════\n";

        if ($this->warnings !== []) {
            echo "\nWarnings (" . count($this->warnings) . "):\n";
            foreach ($this->warnings as $w) {
                echo "  ! {$w}\n";
            }
        }

        if ($this->errors !== []) {
            echo "\nErrors (" . count($this->errors) . "):\n";
            foreach ($this->errors as $e) {
                echo "  ✖ {$e}\n";
            }
            echo "\n[SYSTEM] Access Denied — fix errors before merging to main.\n";
            return;
        }

        echo "\n[SYSTEM] All repo laws cleared. Arise.\n";
        if ($this->warnings !== []) {
            echo "(Warnings do not fail CI; resolve when practical.)\n";
        }
    }
}

$root = dirname(__DIR__, 2);
exit((new RepoValidator($root))->run());
