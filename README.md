# PHP Problem Solving — Solo Leveling Edition

[![PHP 8.5+](https://img.shields.io/badge/PHP-8.5%2B-777BB4?logo=php&logoColor=white)](https://www.php.net/)
[![Gates](https://img.shields.io/badge/Gates-224%20stubs-blue)](02-Problems/README.md)
[![Hunter Solves First](https://img.shields.io/badge/Spoilers-Off-critical)](repo-ideas/21-hunter-solves-first-no-direct-answers.md)
[![English Only](https://img.shields.io/badge/Docs-English%20100%25-informational)](repo-ideas/22-english-only.md)
[![CI Laws](https://img.shields.io/badge/CI-Repo%20Laws-success)](scripts/ci/validate-repo.php)

> **PHP 8.5 Learn + Solve gym** — the **20% of DSA patterns** that cover most interview / backend thinking, practiced the PHP way.  
> Solo Leveling progression · Big Tech / FAANG-ready patterns.  
> **Not** a solutions dump. **Not** Laravel / OOP / Design Patterns. You write every `solution-1.php`.

```
[SYSTEM NOTICE]
Hunter Rank: E · Title: The Weakest Solver
Objective: Clear Gates. Absorb Patterns. Level Up Alone.
Command waiting: Arise.
```

## At a glance

| | |
|:---|:---|
| **What** | Tracks `00`→`04`: PHP/PS → Skill Books → Gates → mocks → interview armor |
| **How** | Gate `README.md` → fill stub `solution-1.php` (PHP 8.5) · method below |
| **Order** | Gate IDs: **E (001+) → D → C → B → A → S → Side → Armor**; unlock by Hunter Rank |
| **Layout** | `Rank / Category / Gate-NNN-kebab/` — one stub per Gate |
| **Start** | Beginner → [`00-Awakening/`](00-Awakening/). Else → [`02-Problems/E-Gates/`](02-Problems/E-Gates/) **001** |
| **Laws** | Hunter Solves First · English-Only · PHP Fitness · Professionalism · Strict Progression |

## Clear method (interview mirror)

Same discipline as a serious Pareto set — **one file**, your iterations, no shipped answers:

| Step | Do this |
|:---|:---|
| 1. **Brief** | Read System Brief · Learn First · constraints · 1–2 examples |
| 2. **Brute** | Get a correct PHP answer first ([Awakening Lesson 02](00-Awakening/Part-0-Problem-Solving-Intro/Lesson-02-brute-force-first/)) |
| 3. **Tighten** | Improve time/space; rewrite the same `solution-1.php` (or note Big-O in a comment) |
| 4. **Talk** | Say Time / Space aloud — mocks require this ([Track 3](03-Mock-Interview/)) |

Mark ✅ on the [Gate map](02-Problems/README.md) only when you can explain the clear without reading the code.

```
00-Awakening/                    learn PHP + how to read problems
01-Patterns-And-Fundamentals/    Skill Books + PATTERN-CATALOG.md
02-Problems/                     E→S Gates + Side-Quests
03-Mock-Interview/               timed Instant Dungeons
04-Interview-Armor/              list/TreeNode form (B-Rank+)
CONTRIBUTING.md · AGENTS.md · SOURCES.md · SYSTEM-LOG.md · playground.php
scripts/ci/ · repo-ideas/ · .github/
```

**Path:** `00` learn → `01` patterns → `02` solve → `03` mock → `04` armor.

## How to start

1. `php -v` (need **8.5+**) · `php playground.php`
2. Open one Gate under [`E-Gates/`](02-Problems/E-Gates/) (or Awakening first)
3. Edit only that Gate’s `solution-1.php`

Gate map: [`02-Problems/README.md`](02-Problems/README.md)

## Status Window

```
║              STATUS WINDOW               ║
║ Name        : (You)                      ║
║ Level       : 1                          ║
║ Hunter Rank : E-Rank ★                   ║
║ Job         : None (locked)              ║
║ Title       : The Weakest Solver         ║
║ XP          : 0 / 100                    ║
║ Fatigue     : 0 / 100                    ║
║ Streak      : 0 days                     ║
║ Gates Open  : E-Gates only               ║
║ STATS                                    ║
║  STR   1   → grit / finish hard Gates    ║
║  AGI   1   → speed under time pressure   ║
║  INT   1   → pattern recognition         ║
║  SEN   1   → edge-case detection         ║
║  VIT   1   → daily quest consistency     ║
║ SHADOW ARMY (Mastered Patterns)          ║
║  (empty — clear Gates, then Arise)       ║
```

On clear: mark Gate map ✅ · update this panel · log majors in [`SYSTEM-LOG.md`](SYSTEM-LOG.md).

## Tracks

| # | Folder | Role |
|:---:|:---|:---|
| 0 | [`00-Awakening/`](00-Awakening/) | PHP + reading problems |
| 1 | [`01-Patterns-And-Fundamentals/`](01-Patterns-And-Fundamentals/) | DSA Skill Books ([catalog](01-Patterns-And-Fundamentals/PATTERN-CATALOG.md)) |
| 2 | [`02-Problems/`](02-Problems/) | Solve Gates (E→S + optional Side Quests) |
| 3 | [`03-Mock-Interview/`](03-Mock-Interview/) | Timed mocks (B-Rank+) |
| 4 | [`04-Interview-Armor/`](04-Interview-Armor/) | Interview lists/trees (sealed early) |

XP alone never promotes Rank. Full ladder + ranks: [`02-Problems/README.md`](02-Problems/README.md) · [`repo-ideas/04`](repo-ideas/04-solo-leveling-system.md).

## Daily Quest

```
[DAILY QUEST]
Clear 1 unlocked Gate OR rewrite 1 review card from memory
Run your PHP 8.5 solution once
Reward: XP +25 · VIT +1 · Streak +1
```

## Laws (non-negotiable)

1. [`Hunter Solves First`](repo-ideas/21-hunter-solves-first-no-direct-answers.md) — stubs; you write the answer  
2. [`English-Only`](repo-ideas/22-english-only.md) — committed files/paths  
3. [`PHP Fitness`](repo-ideas/19-php-fitness-filter.md) — list theater → Armor  
4. [`Professionalism Ratchet`](repo-ideas/23-professionalism-ratchet.md)

## Graduation

| Badge | Needs |
|:---|:---|
| **PHP Hunter** | Awakening + Skill Books + PHP-fit Gates + basic mocks |
| **Big Tech Ready** | + Interview Armor + Mock Gauntlet |
| **FAANG Ready** | + Language Transfer Sprint + harder mocks |

[`repo-ideas/20`](repo-ideas/20-big-tech-faang-graduation.md) — PHP is not the default FAANG live-coding language; patterns still transfer.

## Docs

| Audience | Start |
|:---|:---|
| Hunter | This file → Awakening or E-Gates |
| Contributor | [`CONTRIBUTING.md`](CONTRIBUTING.md) |
| AI / maintainer | [`AGENTS.md`](AGENTS.md) → [`repo-ideas/`](repo-ideas/) |
| Sources | [`SOURCES.md`](SOURCES.md) |

## Credits

| | |
|:---|:---|
| Platforms | Curated imports only — [`SOURCES.md`](SOURCES.md) · never copy solutions |
| Pattern curation | Interview classics (e.g. NeetCode / Blind 75 / Pareto-style sets) filtered by [PHP Fitness](repo-ideas/19-php-fitness-filter.md) |
| Prior milestone | Sibling C++ Pareto practice: [LeetCode-DSA-Pareto-Set](https://github.com/Galhoom22/LeetCode-DSA-Pareto-Set) — same 20/80 idea; **this** gym is Learn+Solve PHP stubs |

```bash
php scripts/ci/validate-repo.php
```

*Arise.*
