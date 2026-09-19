# 01 — Core Idea

> AI load this with `00-mission-learn-and-solve.md` first.
> Purpose, motto, Solo Leveling promise, and sacred progression rule summary.

## 1. Core Idea for the New Repo

### Single Purpose
- The current repo is dedicated to one thing: learning OOP in PHP.
- The new repo must be dedicated to one thing only:
  **everything Problem Solving + DSA specialized for PHP 8.5 — as a Learn + Solve system**.
- It is a **learning academy and a solving gym**, not a solutions-only dump.
- **Opening rule:** Gates are authored **without finished solutions first**; the AI explains what the problem wants, the hunter tries alone, and only then receives non-spoiler coaching (`21-hunter-solves-first-no-direct-answers.md`).
- Solutions in this repo are **PHP only** (PHP 8.5). No Python/Java “also ran” folders.
- This is **PHP-specialized** training — not language-agnostic DSA with PHP pasted on (`19-php-fitness-filter.md`).
- Problems are **imported / adapted from many famous platforms**, then filtered for PHP fitness and stored in one fun Solo Leveling system.
- Scope includes Problem Solving habits, DSA structures/algorithms, complexity thinking, and the PHP needed to implement them.
- No full OOP/OOD/Laravel courses inside this repo — those belong to sibling study repos.
- Minimal PHP OOP is allowed only when DSA needs nodes/classes (`ListNode`, `TreeNode`, etc.).

### Who it is for (including total beginners + FAANG climbers)
Someone may enter knowing **nothing** about:
- PHP
- Problem Solving
- DSA

Or they may already know another language (Python/Java/JS/C++) and want DSA + interview strength (and maybe PHP too).

If they follow the ordered path through **FAANG Ready graduation** (`20-big-tech-faang-graduation.md`), they leave prepared for large-company and FAANG-style coding interviews — not only “finished some PHP puzzles”.

They also gain:
- stronger **PHP 8.5** implementation skill
- **Big Tech / FAANG interview readiness** (patterns + mocks + Interview Armor + language transfer)
- clear **Backend Links**: why each pattern matters in daily backend work
- the ability to re-express solutions in another language when companies require it

See `17-faang-prep-and-language-transfer.md`, `18-backend-career-links.md`, `19-php-fitness-filter.md`, `20-big-tech-faang-graduation.md`.

### Learn + Solve (mandatory duo)
Every item in the repo must support both:
1. **Learn** — teach the idea in plain language before/during the fight
2. **Solve** — require the hunter to write PHP 8.5 and explain

A Gate with only an answer is incomplete.
A lecture with no practice is incomplete.

### Massive Multi-Source Problem Bank
The repo is not “LeetCode only”. It is a **PHP-focused aggregation hub** for PS + DSA:
- Take famous problems from many sites.
- Teach them and solve them in **PHP 8.5**.
- Store them as Gates with unified metadata (Gate Rank, pattern, XP, source link).
- Keep the bank large — but the **play order must stay strictly progressive**.

### 20/80 Principle (from the parent study folder name)
- You may store a **huge** problem bank.
- The **required climb path** still focuses on the **20% of patterns / DSA skills** that cover **80% of interviews and common contests** — especially FAANG-style coding rounds (Blind 75 / NeetCode-classics bias).
- Extra Gates can exist as optional side quests — but they must still obey difficulty order inside their pattern/rank.
- Each curriculum part builds at most one or two concepts (same rule as “at most 2 new concepts per session” in the current repo).

### Suggested Motto
> Learn the Skill → Enter the Gate → Write PHP 8.5 → Level Up → Arise.

### Why Solo Leveling? (Fun + Motivation Promise)
Boring repos feel like homework. This repo should feel like **Sung Jin-Woo’s System**:
- You start as the **weakest E-Rank Hunter** (even from zero knowledge).
- Problems are **Gates / Dungeons**, not a dump of links.
- The **System** talks to you: quests, status windows, warnings, LEVEL UP notices.
- You grow through **XP, Level, Stats, Hunter Rank, Job Change, and Shadow Army**.
- Every cleared Gate makes you visibly **and actually** stronger — so you want the next session.
- Goal: **addictive, game-like learning + practice** for real PHP Problem Solving and DSA.

Narrative line to keep using:
> You were the weakest. The System chose you anyway. Now level up — alone.

### Sacred Rule: Strict Difficulty Progression
> **Never place a harder Gate before an easier Gate in the required climb path.**

This is the most important content rule in the whole repo:
- Inside a pattern: easy → medium → hard.
- Inside a Hunter Rank: E-Gates before D-Gates before C-Gates…
- Across the curriculum: no “boss jump” that skips foundations.
- Teaching depth is highest at the start; later Gates assume earlier lessons.
- Optional side quests may exist, but the **recommended / required order** must always be ascending difficulty.
- If two Gates feel equal, order by dependency (prerequisite concept first), then by source difficulty, then by Gate number.

Violation example (FORBIDDEN):
```
Gate 003 - 3Sum (Medium)     ← too early
Gate 004 - Two Sum (Easy)    ← easier after harder = broken progression
```

Correct example:
```
Gate 001 - Two Sum (Easy / D-Gate)
Gate 002 - Valid Anagram (Easy / D-Gate)
Gate 018 - 3Sum (Medium / C-Gate or B-Gate)
```

### Success test for the whole repo
Ask:
> “If a total beginner only follows this repo in order, will they understand PHP + Problem Solving + DSA better after every rank — and become dramatically stronger at higher Levels?”

If no → the content is incomplete (usually missing teaching, or progression is broken).
