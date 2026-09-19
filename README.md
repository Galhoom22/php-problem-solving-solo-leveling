# ⚔️ PHP Problem Solving — Solo Leveling Edition

[![PHP 8.5+](https://img.shields.io/badge/PHP-8.5%2B-777BB4?logo=php&logoColor=white)](https://www.php.net/)
[![Gates](https://img.shields.io/badge/Gates-230%20stubs-blue)](02-Problems/README.md)
[![Hunter Solves First](https://img.shields.io/badge/Spoilers-Off-critical)](repo-ideas/21-hunter-solves-first-no-direct-answers.md)
[![English Only](https://img.shields.io/badge/Docs-English%20100%25-informational)](repo-ideas/22-english-only.md)
[![CI Laws](https://img.shields.io/badge/CI-Repo%20Laws-success)](scripts/ci/validate-repo.php)

A **Learn + Solve gym**: curated DSA Gates with empty PHP stubs — you write every answer.  
Not a solutions dump, and not a scraped LeetCode mirror. Theme is light Solo Leveling (ranks, Gates, XP).

**230 Gates** · PHP **8.5** · climb **E → S** (+ Side Quests · Interview Armor)

> 🌑 **Hunter Solves First** — you write every `solution-1.php`.

```
[SYSTEM NOTICE]
Hunter Rank: E · Title: The Weakest Solver
Objective: Clear Gates. Absorb Patterns. Level Up Alone.
Command waiting: Arise.
```

---

## 📑 Contents

| | Section | What’s inside |
|:---:|:---|:---|
| 🧭 | [Who this is for](#-who-this-is-for) | Where to start |
| 📦 | [What this is / is not](#-what-this-is--is-not) | Gym identity |
| 📜 | [Gate README](#-how-to-read-a-gate-readme) | Section template |
| 🚀 | [Quick start](#-quick-start-3-minutes) | First 3 minutes |
| ⚔️ | [How to solve](#️-how-to-solve-one-gate) | Brief → Brute → Tighten → Talk |
| 🗺️ | [Climb map](#️-climb-map-study-order) | Tracks + ranks |
| 🖥️ | [Progress](#️-your-progress-panel) | Status Window |
| 📁 | [Structure](#-repository-structure) | Folder tree |
| ⚙️ | [Requirements](#️-requirements) | PHP 8.5+ |
| 🔗 | [Siblings](#-sibling-study-repos) | Related study repos |

---

## 🧭 Who this is for

| You are… | Start here |
|:---|:---|
| 🌱 New to PHP or problem statements | [`00-Awakening/`](00-Awakening/) |
| 🗡️ Comfortable with basic PHP | [`02-Problems/01-E-Gates/`](02-Problems/01-E-Gates/) — Gate **001** |
| 🎯 Preparing for backend / Big Tech interviews | Follow tracks `00` → `04` in order |

**Honest note:** PHP is not the usual FAANG live-coding language. The *patterns* transfer; the language drill is PHP-first.

---

## 📦 What this is / is not

| ✅ This gym | 🚫 Not this gym |
|:---|:---|
| 230 problem **stubs** (brief + empty PHP file) | Finished answers on the climb |
| 📖 DSA Skill Books ([catalog](01-Patterns-And-Fundamentals/PATTERN-CATALOG.md)) | Laravel / OOP / GoF Design Patterns course |
| 🏰 Ranked path E → S + optional Side Quests | Random full-site problem dumps |
| ⏱️ Mocks + interview list/tree armor (late) | Spoilers as the default path |

---

## 📜 How to read a Gate README

Same template in every Gate folder (read in this order):

| | Section | What to do |
|:---:|:---|:---|
| 🧾 | **System Brief** | Problem in plain words + examples |
| 🎯 | **What This Gate Is Testing** | The one skill under the microscope |
| 🎓 | **Learn First** | Ideas to know before you code |
| 💼 | **Backend Link** | Why this shows up in real PHP work |
| ✅ | **Clear Rule** | When you may mark the Gate done |
| 🔗 | **Source** | Where the problem came from |

Folder shape: `Rank / Category / Gate-NNN-kebab/` → `README.md` + empty `solution-1.php`.  
You write the answer — the stub ships with `TODO` only.

---

## 🚀 Quick start (3 minutes)

```bash
php -v          # need PHP 8.5+
php playground.php
```

1. 🚪 Open **Gate 001**: [`02-Problems/01-E-Gates/01-Numbers/Gate-001-sum-two-numbers/`](02-Problems/01-E-Gates/01-Numbers/Gate-001-sum-two-numbers/)  
   *(Absolute beginners: do [`00-Awakening/`](00-Awakening/) first.)*
2. 📜 Read the Gate README (table above).
3. ✍️ Write your code in `solution-1.php`.
4. 🗣️ When you can explain it without looking, mark ✅ on the [Gate map](02-Problems/README.md).

---

## ⚔️ How to solve one Gate

| Step | What to do |
|:---|:---|
| 1️⃣ **Read** | Brief → Learn First → constraints |
| 2️⃣ **Brute** | Correct answer first ([lesson](00-Awakening/Part-02-Problem-Solving-Intro/Lesson-02-brute-force-first/)) |
| 3️⃣ **Tighten** | Improve time/space in the same `solution-1.php` |
| 4️⃣ **Talk** | Say Time / Space aloud (required in [mocks](03-Mock-Interview/)) |

---

## 🗺️ Climb map (study order)

Work **top to bottom**.

### Tracks

| | Track | Folder | Role |
|:---:|:---:|:---|:---|
| 🌅 | 0 | [`00-Awakening/`](00-Awakening/) | PHP + how to read a problem |
| 📘 | 1 | [`01-Patterns-And-Fundamentals/`](01-Patterns-And-Fundamentals/) | Skill Books (DSA patterns) |
| 🏰 | 2 | [`02-Problems/`](02-Problems/) | Main Gate bank |
| ⏱️ | 3 | [`03-Mock-Interview/`](03-Mock-Interview/) | Timed talk-aloud |
| 🛡️ | 4 | [`04-Interview-Armor/`](04-Interview-Armor/) | List / TreeNode form (late) |

### Gates by rank

Listed in **climb order** — open folders top to bottom in the explorer too (`01-E` … `07-Side`).

| | Rank folder | Gates | Intent |
|:---:|:---|:---:|:---|
| 🌱 | [`01-E-Gates/`](02-Problems/01-E-Gates/) | 49 | Survive — PHP confidence |
| 🗡️ | [`02-D-Gates/`](02-Problems/02-D-Gates/) | 45 | Core Easy |
| ⚡ | [`03-C-Gates/`](02-Problems/03-C-Gates/) | 38 | Easy → early Medium |
| 🔥 | [`04-B-Gates/`](02-Problems/04-B-Gates/) | 38 | Main Medium set |
| 🌑 | [`05-A-Gates/`](02-Problems/05-A-Gates/) | 19 | Stretch |
| 👑 | [`06-S-Gates/`](02-Problems/06-S-Gates/) | 3 | Prestige (PHP-fit Hard) |
| 🗺️ | [`07-Side-Quests/`](02-Problems/07-Side-Quests/) | 21 | Optional — not graduation-critical |
| 🛡️ | [`04-Interview-Armor/`](04-Interview-Armor/) | 17 | Interview lists/trees (B-Rank+) |

Full checklist: [`02-Problems/README.md`](02-Problems/README.md)

Uneven rank sizes are intentional: curated for PHP fitness, not a mirror of every platform.

---

## 🖥️ Your progress panel

Edit this when you clear Gates (also update the Gate map ✅).

```
║              STATUS WINDOW               ║
║ Name        : (You)                      ║
║ Level       : 1                          ║
║ Hunter Rank : E-Rank ★                   ║
║ Title       : The Weakest Solver         ║
║ XP          : 0 / 100                    ║
║ Streak      : 0 days                     ║
║ Gates Open  : 01-E-Gates only            ║
║ Mastered patterns : (none yet — Arise)   ║
```

Major milestones → [`SYSTEM-LOG.md`](SYSTEM-LOG.md)

**📅 Daily Quest:** clear 1 unlocked Gate *or* redo one problem from memory, run it once on PHP 8.5.

---

## ⚖️ Rules that keep the gym honest

1. **[Hunter Solves First](repo-ideas/21-hunter-solves-first-no-direct-answers.md)** — stubs only; you write the answer  
2. **[English-Only](repo-ideas/22-english-only.md)** — committed files and paths stay English  
3. **[PHP Fitness](repo-ideas/19-php-fitness-filter.md)** — heavy list/pointer theater lives in Interview Armor, not early ranks  
4. **[Professionalism](repo-ideas/23-professionalism-ratchet.md)** — every change should make the repo clearer, not noisier  

---

## 🏆 Graduation (optional targets)

| Badge | Rough meaning |
|:---|:---|
| 🗡️ **PHP Hunter** | Awakening + patterns + PHP-fit Gates + basic mocks |
| 🏢 **Big Tech Ready** | + Interview Armor + serious mock gauntlet |
| 👑 **FAANG Ready** | + language-transfer practice + harder mocks |

Details: [`repo-ideas/20-big-tech-faang-graduation.md`](repo-ideas/20-big-tech-faang-graduation.md)

---

## 📁 Repository structure

```
php-problem-solving-solo-leveling/
├── README.md                 ← start here
├── playground.php            ← scratch pad
├── 00-Awakening/             ← Track 0 · PHP + how to read a problem
├── 01-Patterns-And-Fundamentals/  ← Track 1 · DSA Skill Books
├── 02-Problems/              ← Track 2 · Gate bank
│   ├── README.md             ← Gate map + ✅ checklist
│   ├── 01-E-Gates/ … 06-S-Gates/
│   └── 07-Side-Quests/       ← optional
├── 03-Mock-Interview/        ← Track 3 · timed talk-aloud
├── 04-Interview-Armor/       ← Track 4 · list / tree form (late)
├── scripts/ci/               ← repo laws
└── SOURCES.md · CONTRIBUTING.md · AGENTS.md
```

Naming: tracks `00`–`04` · ranks `01-E`…`07-Side` · Gates `Gate-NNN-kebab/` so explorer/GitHub sort matches climb order.

---

## ⚙️ Requirements

| | Need |
|:---:|:---|
| 🐘 | **PHP 8.5+** (`php -v`) |
| 📖 | Basic PHP — variables, functions, arrays, loops (or start in [`00-Awakening/`](00-Awakening/)) |
| 💻 | Local PHP to run `solution-1.php` / `playground.php` |
| 🚫 | No framework · no Composer required for the climb |

Trusted references: [`SOURCES.md`](SOURCES.md) · [PHP Manual](https://www.php.net/manual/en/)

---

## 🔗 Sibling study repos

| Repo | Role next to this gym |
|:---|:---|
| [php-oop-documentation](https://github.com/Galhoom22/php-oop-documentation) | OOP **lectures** path (classes → project) — not DSA Gates |
| [technical-interview-questions](https://github.com/Galhoom22/technical-interview-questions) | Verbal PHP / Laravel **answer bank** |
| [LeetCode-DSA-Pareto-Set](https://github.com/Galhoom22/LeetCode-DSA-Pareto-Set) | Earlier C++ Pareto **solutions** practice |
| **This repo** | PHP DSA **stubs** — you solve; no spoilers |

---

## 📚 Docs

| Need | Open |
|:---|:---|
| 🧭 Solve / learn | This file → Awakening or `01-E-Gates` |
| 🤝 Contribute | [`CONTRIBUTING.md`](CONTRIBUTING.md) |
| 🔗 Sources | [`SOURCES.md`](SOURCES.md) |
| 🤖 AI / laws | [`AGENTS.md`](AGENTS.md) · [`repo-ideas/`](repo-ideas/) |
| 🔒 Branch protection | [`.github/BRANCH_PROTECTION.md`](.github/BRANCH_PROTECTION.md) |

```bash
php scripts/ci/validate-repo.php
```

---

*Arise — open Gate 001 and write the first clear.* 🌑
