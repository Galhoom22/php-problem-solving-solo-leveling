# PHP Problem Solving — Solo Leveling Edition

> **PHP 8.5** · Learn + Solve · DSA the PHP way · Big Tech / FAANG graduation path

```
[SYSTEM NOTICE]
You are Hunter Rank: E
Class: None
Title: The Weakest Solver

Warning: Most Hunters quit before Level 10.
You will not.

Objective: Clear Gates. Absorb Patterns. Level Up Alone.
Command waiting: Arise.
```

---

## Status Window

```
╔══════════════════════════════════════════╗
║              STATUS WINDOW               ║
╠══════════════════════════════════════════╣
║ Name        : (You)                      ║
║ Level       : 1                          ║
║ Hunter Rank : E-Rank ★                   ║
║ Job         : None (locked)              ║
║ Title       : The Weakest Solver         ║
║ XP          : 0 / 100                    ║
║ Fatigue     : 0 / 100                    ║
║ Streak      : 0 days                     ║
║ Gates Open  : E-Gates only               ║
╠══════════════════════════════════════════╣
║ STATS                                    ║
║  STR   1   → grit / finish hard Gates    ║
║  AGI   1   → speed under time pressure   ║
║  INT   1   → pattern recognition         ║
║  SEN   1   → edge-case detection         ║
║  VIT   1   → daily quest consistency     ║
╠══════════════════════════════════════════╣
║ SHADOW ARMY (Mastered Patterns)          ║
║  (empty — clear Gates, then Arise)       ║
╚══════════════════════════════════════════╝
```

> Update this panel when you clear quests. Log major events in [`SYSTEM-LOG.md`](SYSTEM-LOG.md).

---

## Hunter Rank Ladder

| Hunter Rank | Levels | Gates unlocked | Status |
|:---|:---|:---|:---|
| **E-Rank** | 1–5 | E-Gates | 🔓 Current |
| **D-Rank** | 6–10 | D-Gates | 🔒 |
| **C-Rank** | 11–18 | C-Gates | 🔒 |
| **B-Rank** | 19–26 | B-Gates + Mock unlock | 🔒 |
| **A-Rank** | 27–34 | A-Gates | 🔒 |
| **S-Rank** | 35–42 | S-Gates | 🔒 |
| **National Level** | 43–48 | Full Hard + serious Instant Dungeons | 🔒 |
| **Monarch Candidate** | 49–50+ | Prestige + teach-back | 🔒 |

**Strict Progression Law:** clear lower Gates before unlocking higher ones. XP alone never promotes Rank.

---

## Quest Board

### Daily Quest
```
[DAILY QUEST — Arrive]
Objective:
- Clear 1 unlocked Gate OR rewrite 1 review card from memory
- Run your PHP 8.5 solution once

Reward: XP +25, VIT +1, Streak +1
Failure: Fatigue +15 → soft Penalty Quest tomorrow
```

### Recommended (first session)
1. Start [`00-Awakening/`](00-Awakening/) if you are new to PHP or problem statements
2. Or enter [`02-Problems/E-Gates/`](02-Problems/E-Gates/) if PHP basics are already solid
3. Read the **Hunter Solves First** rule below before any Gate

---

## Sacred Rule — Hunter Solves First

1. Gates ship **without finished solutions**
2. AI explains **what the problem wants** (I/O, examples, constraints)
3. **You** try alone in PHP 8.5
4. If stuck → coaching with hints/questions — **no full solution dump first**

Full coaching ladder: [`repo-ideas/21-hunter-solves-first-no-direct-answers.md`](repo-ideas/21-hunter-solves-first-no-direct-answers.md)

---

## Purpose

This repo is a **learning system + solving gym** for Problem Solving and DSA **specialized for PHP 8.5**.

It is **not** a solutions dump, a framework course, or language-agnostic LeetCode with PHP syntax glued on.

**Exit goal:** graduate **Big Tech Ready** / **FAANG Ready** while becoming a stronger PHP problem solver — with honest Backend Links along the way.

---

## Who This Is For

- Absolute beginners (PHP + PS + DSA from zero)
- PHP hunters leveling interview skill
- Polyglots who want a DSA dojo in PHP, then transfer patterns to Python/Java/JS/C++

---

## Learning Path

```
00 Awakening  →  01 Skill Books  →  02 PHP-fit Gates  →  03 Mock Gauntlet  →  04 Interview Armor
```

| Track | Folder | Role |
|:---|:---|:---|
| 0 | [`00-Awakening/`](00-Awakening/) | PHP + how to read problems |
| 1 | [`01-Patterns-And-Fundamentals/`](01-Patterns-And-Fundamentals/) | Skill Books (PHP-fit DSA) |
| 2 | [`02-Problems/`](02-Problems/) | Gates (Learn + Solve) |
| 3 | [`03-Mock-Interview/`](03-Mock-Interview/) | Instant Dungeons (timed mocks) |
| 4 | [`04-Interview-Armor/`](04-Interview-Armor/) | Big Tech / FAANG classics + language transfer |

---

## Graduation Badges

| Badge | Meaning |
|:---|:---|
| **PHP Hunter** | Awakening + Skill Books + PHP-fit Gates + basic mocks |
| **Big Tech Ready** | PHP Hunter + Interview Armor + Mock Gauntlet |
| **FAANG Ready** | Big Tech Ready + Language Transfer Sprint + harder mocks |

Checklist: [`repo-ideas/20-big-tech-faang-graduation.md`](repo-ideas/20-big-tech-faang-graduation.md)

---

## How to Start

1. Install **PHP 8.5+** (`php -v`)
2. Clone this repo
3. Open [`00-Awakening/README.md`](00-Awakening/README.md) **or** skip to E-Gates if you already know basic PHP
4. One session = **1 Daily Quest + 1–2 Gates** max (watch Fatigue)
5. Create your own `solution-1.php` inside each Gate — never wait for a spoiler file

Quick local run:

```bash
php playground.php
```

---

## Repository Structure

```
├── README.md                          ← Status Window (you are here)
├── SOURCES.md                         ← Multi-platform index
├── SYSTEM-LOG.md                      ← Level-ups, Arise, Rank promotions
├── playground.php                     ← Scratch pad
├── 00-Awakening/
├── 01-Patterns-And-Fundamentals/
├── 02-Problems/                       ← E → S Gates + Side Quests
├── 03-Mock-Interview/
├── 04-Interview-Armor/
└── repo-ideas/                        ← Design specs for AI / maintainers
```

---

## Requirements

- **PHP 8.5+**
- Willingness to learn from zero and solve before peeking
- Optional second language later for the Transfer Sprint (Python / Java / JS / C++)

---

## PHP Fitness Filter

Core climb problems must feel **PHP-natural** (arrays, maps, strings, nested data, Spl when useful) and carry a **Backend Link**.

Interview classics that fail the filter (e.g. linked-list pointer theater) live in **Track 4 — Interview Armor**, not the early climb.

Details: [`repo-ideas/19-php-fitness-filter.md`](repo-ideas/19-php-fitness-filter.md)

---

## FAANG honesty

1. PHP is **not** the most common FAANG live-coding language.
2. Interviews still test **patterns + thinking**, which transfer.
3. This repo builds PHP strength **and** interview patterns.
4. Track 4 Language Transfer Sprint re-expresses Shadows in the company language.

---

## Backend Career Links

Every major pattern should answer: *why does a PHP backend engineer care?*  
Caches, lookups, queues, rate limits, nested resources, priority jobs — not puzzle theater alone.

---

## Problem Sources

LeetCode · Codewars · HackerRank · Exercism · Edabit · GFG · and more (filtered).  
Full index: [`SOURCES.md`](SOURCES.md)

---

## Progress Sync Rule

When you clear a Gate / pattern:

1. Mark ✅ in the track README
2. Update this **Status Window** (XP / Level / Rank / Shadows)
3. Append major events to [`SYSTEM-LOG.md`](SYSTEM-LOG.md)

---

## Design docs (AI / maintainers)

- **Agents:** [`AGENTS.md`](AGENTS.md) — boot order, Hunter Solves First, modes, do/don’t  
- Full design pack: [`repo-ideas/README.md`](repo-ideas/README.md)

## CI — Protecting `main`

Every PR to `main` must pass GitHub Actions:

- **Repo Laws + PHP Lint** — structure, Gate metadata, PHP Fitness bans, no open spoilers, `strict_types`, syntax
- **Sacred Structure Guard** — blocks deleting tracks / law files / CI itself

Local check:

```bash
php scripts/ci/validate-repo.php
```

After the first push to GitHub, lock `main` with required checks — see [`.github/BRANCH_PROTECTION.md`](.github/BRANCH_PROTECTION.md).

---

*Arise.*
