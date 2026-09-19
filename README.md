# PHP Problem Solving — Solo Leveling Edition

[![PHP 8.5+](https://img.shields.io/badge/PHP-8.5%2B-777BB4?logo=php&logoColor=white)](https://www.php.net/)
[![Gates](https://img.shields.io/badge/Gates-224%20stubs-blue)](02-Problems/README.md)
[![Hunter Solves First](https://img.shields.io/badge/Spoilers-Off-critical)](repo-ideas/21-hunter-solves-first-no-direct-answers.md)
[![English Only](https://img.shields.io/badge/Docs-English%20100%25-informational)](repo-ideas/22-english-only.md)
[![CI Laws](https://img.shields.io/badge/CI-Repo%20Laws-success)](scripts/ci/validate-repo.php)

**Practice DSA in PHP 8.5 — write every solution yourself.**

This is a Learn + Solve gym: curated problem briefs, empty stubs, and a clear path from beginner drills to interview-style work.  
Theme is light Solo Leveling flavor (ranks, Gates, XP). The goal is real skill — not collecting answers.

> You write every `solution-1.php`. There is no solutions dump here.

---

## Who this is for

| You are… | Start here |
|:---|:---|
| New to PHP or problem statements | [`00-Awakening/`](00-Awakening/) |
| Comfortable with basic PHP | [`02-Problems/E-Gates/`](02-Problems/E-Gates/) — Gate **001** |
| Preparing for backend / Big Tech interviews | Follow tracks `00` → `04` in order |

**Honest note:** PHP is not the usual FAANG live-coding language. The *patterns* (hash maps, two pointers, graphs, …) transfer; the language drill is PHP-first.

---

## What you get (and what you don’t)

| Included | Not included |
|:---|:---|
| 224 problem **stubs** (brief + empty PHP file) | Finished answers checked into the climb |
| DSA Skill Books ([pattern catalog](01-Patterns-And-Fundamentals/PATTERN-CATALOG.md)) | Laravel / OOP / GoF Design Patterns course |
| Ranked path E → S + optional Side Quests | Random full-site problem dumps |
| Timed mock format + interview list/tree armor | Spoilers as the default path |

**Hunter Solves First** is the law: open the brief, try alone, ask for coaching only when stuck.

---

## Quick start (3 minutes)

```bash
php -v          # need PHP 8.5+
php playground.php
```

1. Open **Gate 001**: [`02-Problems/E-Gates/01-Numbers/Gate-001-sum-two-numbers/`](02-Problems/E-Gates/01-Numbers/Gate-001-sum-two-numbers/)  
   *(Absolute beginners: do [`00-Awakening/`](00-Awakening/) first.)*
2. Read that Gate’s `README.md` (problem brief).
3. Write your code in `solution-1.php`.
4. When you can explain it without looking, mark ✅ on the [Gate map](02-Problems/README.md).

Full checklist of all Gates: [`02-Problems/README.md`](02-Problems/README.md)

---

## How to solve one Gate

Use one file. Improve it in place — same habit as a strong interview set:

| Step | What to do |
|:---|:---|
| **1. Read** | Constraints, examples, “Learn First” notes in the Gate README |
| **2. Brute** | Get a correct answer first ([lesson](00-Awakening/Part-0-Problem-Solving-Intro/Lesson-02-brute-force-first/)) |
| **3. Tighten** | Improve time/space; rewrite the same `solution-1.php` |
| **4. Talk** | Say Time and Space out loud (required later in [mocks](03-Mock-Interview/)) |

---

## Repository map

Work **top to bottom**:

| Track | Folder | Plain meaning |
|:---:|:---|:---|
| 0 | [`00-Awakening/`](00-Awakening/) | Learn enough PHP + how to read a problem |
| 1 | [`01-Patterns-And-Fundamentals/`](01-Patterns-And-Fundamentals/) | Short pattern lessons (Skill Books) |
| 2 | [`02-Problems/`](02-Problems/) | Main practice bank (Gates by rank) |
| 3 | [`03-Mock-Interview/`](03-Mock-Interview/) | Timed talk-aloud sessions |
| 4 | [`04-Interview-Armor/`](04-Interview-Armor/) | Linked-list / tree interview form (later) |

Inside `02-Problems/`, folders are numbered so you can walk them in order  
(example: `E-Gates/01-Numbers/` → `02-Control-Flow/` → …).  
Gate IDs also ascend: **E (001+) → D → C → B → A → S → Side Quests → Armor**.

---

## Your progress panel

Edit this when you clear Gates (also update the Gate map ✅).

```
║              STATUS WINDOW               ║
║ Name        : (You)                      ║
║ Level       : 1                          ║
║ Hunter Rank : E-Rank ★                   ║
║ Title       : The Weakest Solver         ║
║ XP          : 0 / 100                    ║
║ Streak      : 0 days                     ║
║ Gates Open  : E-Gates only               ║
║ Mastered patterns : (none yet — Arise)   ║
```

Major milestones → [`SYSTEM-LOG.md`](SYSTEM-LOG.md)

**Daily habit:** clear 1 unlocked Gate *or* redo one problem from memory, run it once on PHP 8.5.

---

## Rules that keep the gym honest

1. **[Hunter Solves First](repo-ideas/21-hunter-solves-first-no-direct-answers.md)** — stubs only; you write the answer  
2. **[English-Only](repo-ideas/22-english-only.md)** — committed files and paths stay English  
3. **[PHP Fitness](repo-ideas/19-php-fitness-filter.md)** — heavy list/pointer theater lives in Interview Armor, not early ranks  
4. **[Professionalism](repo-ideas/23-professionalism-ratchet.md)** — every change should make the repo clearer, not noisier  

---

## Graduation (optional targets)

| Badge | Rough meaning |
|:---|:---|
| **PHP Hunter** | Awakening + patterns + PHP-fit Gates + basic mocks |
| **Big Tech Ready** | + Interview Armor + serious mock gauntlet |
| **FAANG Ready** | + language-transfer practice + harder mocks |

Details: [`repo-ideas/20-big-tech-faang-graduation.md`](repo-ideas/20-big-tech-faang-graduation.md)

---

## Docs

| Need | Open |
|:---|:---|
| Solve / learn | This file → Awakening or E-Gates |
| Add a Gate / contribute | [`CONTRIBUTING.md`](CONTRIBUTING.md) |
| Problem sources | [`SOURCES.md`](SOURCES.md) |
| AI / maintainer laws | [`AGENTS.md`](AGENTS.md) · [`repo-ideas/`](repo-ideas/) |
| Branch protection | [`.github/BRANCH_PROTECTION.md`](.github/BRANCH_PROTECTION.md) |

```bash
php scripts/ci/validate-repo.php
```

Prior C++ Pareto set (solutions style, different mission): [LeetCode-DSA-Pareto-Set](https://github.com/Galhoom22/LeetCode-DSA-Pareto-Set)

---

*Arise — open Gate 001 and write the first clear.*
