# 00 — Mission: Learn + Solve (PHP · Problem Solving · DSA)

> AI load this first together with `01-core-idea.md` and **`21-hunter-solves-first-no-direct-answers.md`**.
> This file defines the educational mission: the repo is not a solutions dump.

---

## FIRST RULE — Problems first, no spoiler solutions

**Before anything else, obey this:**

1. **Gates are written without finished solutions first**  
   Problem statement + teaching context only. No pre-filled answer code for the hunter.

2. **When the hunter opens a Gate, the AI Agent must:**  
   - First explain **what the problem wants** (inputs/outputs/examples/constraints)  
   - Then let the hunter **try to solve alone**  
   - Only if stuck: coach with hints/questions so the hunter **finds** the solution  
   - **Never** drop a full direct solution as the first “help”

3. Full spoiler code is last-resort only, after real attempts, and only if the hunter explicitly asks for it.

Full coaching ladder: `21-hunter-solves-first-no-direct-answers.md`.

---

## The Real Mission

This repository is the **home of everything Problem Solving + DSA specialized for PHP 8.5**.

It is **not**:
- a random folder of answers
- a copy-paste LeetCode mirror
- an OOP/Laravel/framework course
- a “solutions only” archive for people who already know everything

It **is**:
- a **learning system** + a **solving gym**
- a progressive path from **absolute beginner → strong hunter**
- PHP-only solutions and explanations
- DSA + Problem Solving taught step by step inside the climb

### One-line product definition
> If someone knows nothing about PHP, Problem Solving, or DSA — and they follow the full path — they should become a stronger PHP problem solver **and graduate interview-ready for large companies and FAANG-style coding rounds** (patterns, mocks, communication, language transfer), while always knowing why skills matter in backend work.

---

## Exit goal: Big Tech & FAANG ready

The repo is not finished when the hunter “solved some Gates”.
The intended exit is:
- **Big Tech Ready** and ideally **FAANG Ready**

Defined in `20-big-tech-faang-graduation.md`:
- PHP-fit core climb first
- Mock Gauntlet under time + talk aloud
- Interview Armor (classics interviews still ask)
- Language Transfer Sprint for FAANG coding language

---

## FAANG + PHP reality (both true)

1. PHP is **not** the most common FAANG live-coding language.
2. This repo **still helps FAANG prep**, because interviews test **patterns + thinking**, which transfer.
3. This repo **also levels up PHP** for hunters who want PHP strength.
4. Hunters from Python/Java/JS/C++ can use it as a DSA dojo: solve here in PHP, transfer patterns to their interview language when needed.

Full details: `17-faang-prep-and-language-transfer.md`.

---

## Backend career links (why, not only how)

Hunters must not feel they are “only solving puzzles”.
Every major pattern should connect to backend work **directly or indirectly**:
- caches, lookups, queues, rate limits, trees of data, priority jobs, performance instincts, etc.

Full map + required `Backend Link` teaching block: `18-backend-career-links.md`.

---

## Learn AND Solve (dual purpose)

Every Gate / Skill Book must do both:

| Mode | What the hunter gets |
|:---|:---|
| **Learn** | Plain-language teaching: concepts, why it matters, tiny examples, vocabulary, common mistakes |
| **Solve** | A real challenge to implement in PHP 8.5, then explain, then review |

If a Gate only shows a final answer with no teaching → **invalid Gate**.
If a Gate only lectures with no practice task → **invalid Skill Book**.

### The transformation promise
```
Day 1 (E-Rank):
  Knows almost nothing about PHP / PS / DSA

After many ordered Gates:
  Understands arrays, hashing, pointers, trees, graphs, DP basics...
  Can read a new problem, spot the pattern, and write PHP 8.5
  Gets stronger every rank-up — not by memorizing answers
```

---

## Scope: everything PS + DSA in PHP

### In scope (yes)
- Problem Solving mindset (understand → brute force → optimize → prove)
- DSA foundations: arrays, strings, hash maps, stacks, queues, linked lists, trees, heaps, graphs, recursion, backtracking, greedy, binary search, sliding window, two pointers, intervals, union-find, DP intro, bit basics
- Complexity thinking (Big-O Time/Space in plain language)
- PHP 8.5 syntax needed for solving (variables → functions → arrays → simple classes for ListNode/TreeNode → later typed code)
- Multi-platform problems adapted into Gates
- Interview-style explanation practice (FAANG-transferable talk track)
- Timed Instant Dungeons / interview-mock feel
- Pattern skills that transfer to Python/Java/JS/C++ for company interviews **when the pattern is still PHP-natural to train**
- Reject required-path problems that feel unrelated to PHP (linked-list pointer theater, heavy CP structures, etc.)

### Out of scope (no — redirect to other study repos)
- Full PHP OOP course (belongs to OOP repo)
- OOD / SOLID / Design Patterns courses
- Laravel / frameworks / HTTP apps
- Database engineering / API design as primary content
- Language-agnostic theory with no PHP practice
- Claiming PHP is the primary FAANG interview language (be honest; teach transferable DSA instead)

Minimal PHP OOP is allowed only when DSA needs it (e.g. `ListNode`, `TreeNode`).

---

## Absolute beginner path (Zero → Hero)

Assume the hunter may know **nothing**.

### Stage 0 — Awakening (before real Gates)
Teach just enough PHP to fight:
- run a `.php` file
- variables, types, operators
- `if` / loops
- functions
- arrays (list + associative)
- reading input / printing output (simple)
- `declare(strict_types=1);` when ready

This can live as:
- early **E-Rank Skill Books**, and/or
- a small `00-Awakening/` / Part-0 foundations folder

### Stage 1 — Problem Solving literacy
- what a problem statement is
- examples & edge cases
- brute force vs better approach
- what “pattern” means
- how to talk through a solution

### Stage 2 — DSA foundations (ordered)
Introduce one structure/idea at a time with tiny Gates:
arrays → hash map → stack/queue → linked list → tree → heap → graph → DP intro

### Stage 3 — Pattern mastery + bigger Gates
Two pointers, sliding window, binary search, backtracking, etc.

### Stage 4 — Prestige
Harder Gates, Instant Dungeons, CP-style problems, teach-back

**Higher Level/Rank = higher capability**, not just more folders unlocked.

---

## Teach-inside-every-Gate standard

Every Gate README (especially E/D/C) should include learning sections, not only a problem dump — **but without spoiling the final algorithm/code** (see `21`):

```markdown
## Learn First (System Tutorial)
- What you need to know before fighting (concepts / tiny unrelated micro-example OK)
- New terms in plain language

## System Brief (Problem)
- Statement paraphrase + examples + constraints

## Backend Link (Why this matters at work)
- ...

## After you attempt (for notes — not an opening spoiler)
- Key rule / Watch out / Complexity — filled after the hunter tries
```

Early Gates teach more concepts.
Late Gates teach less intro and more strategy — but never open with a full solution dump.
Walkthrough of the optimal approach belongs **after attempt** or as guided discovery hints.

---

## Progressive understanding rule

With every cleared Gate, the hunter should gain at least one of:
1. a new PHP tool they can reuse
2. a new DSA concept
3. a sharper Problem Solving habit
4. a stronger explanation skill

If a Gate adds none of these → remove or rewrite it.

---

## Strength curve (what “stronger” means)

| Hunter Rank | Expected ability |
|:---|:---|
| E-Rank | Runs PHP, loops arrays, solves tiny warmups with guidance |
| D-Rank | Easy hashing/array Gates; explains brute force |
| C-Rank | Spots basic patterns; early Medium with help |
| B-Rank | Clears core Medium; unlocks Interview Armor + serious mocks |
| A-Rank | Stretch Mediums; toward **Big Tech Ready** |
| S-Rank+ | Interview Armor + Transfer Sprint; toward **FAANG Ready** |

Badges (`20`): **PHP Hunter** → **Big Tech Ready** → **FAANG Ready**.
The repo succeeds when graduates can walk into large-company / FAANG-style coding interviews prepared.

---

## AI teaching posture
- Never assume prior CS knowledge
- Explain terms on first use in plain language
- Analogy → tiny example → Gate fight
- One new concept at a time when possible
- Student types the PHP; AI teaches and checks
- Celebrate LEVEL UP only when understanding is real
