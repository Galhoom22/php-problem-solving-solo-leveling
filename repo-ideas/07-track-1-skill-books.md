# 07 — Track 1: Skill Books (Patterns & Fundamentals)

> AI load this for pattern labs, DSA teaching, 3-phase method, review cards, milestones, and tutor rules.

## 5. Track 1 Ideas — Patterns & Fundamentals (Learn-first DSA)

Inspired by `01-Lectures/README.md` as an **Iterative Tutor Skill**.

This track is where the hunter **learns** DSA + Problem Solving patterns in PHP 8.5 before (and alongside) fighting Gates.
It is not optional theory fluff — it is the Skill Book library that makes zero-to-hero possible.

### Frontmatter for the AI Skill Idea
Every track guide starts with YAML frontmatter that defines:
- `name`
- `purpose` (one purpose only: teach PHP PS + DSA patterns)
- `scope` (what is in and what is out)
- `description`
- `triggers` (for example: "next problem", "teach me two pointers", "continue PHP problem solving", "what is a hash map")

### Curriculum in Parts (Hunter-Rank Gated)
Like Foundations → Core OOP → Modern PHP, propose:

```
Part 0 — Awakening (if needed) →  absolute beginner PHP + how to read problems
Part 1 — Warmup               →  E–D Rank
                                  PHP arrays, strings, loops, associative arrays as maps,
                                  Big-O plain talk, array idioms
Part 2 — Core PHP PS Patterns  →  C–B Rank
                                  two pointers, sliding window, binary search,
                                  stack/queue (arrays/Spl), nested trees (JSON-like),
                                  heap (SplPriorityQueue), intervals/greedy, light recursion
Part 3 — Advanced (still PHP-fit) →  A-Rank+
                                  simple graphs (adjacency lists), memoization/DP intro,
                                  cache design (LRU), backend-shaped design Gates
```

Do not open Part 2 Skill Books until the D-Rank → C-Rank Association gate is passed (unless soft-skip is requested).

**Not in required Skill Books:** linked-list pointer theater, union-find, bit olympiad, segment trees.
Those belong only to optional Side Quests if at all (`19-php-fitness-filter.md`).

Frame patterns as **Skills** you extract into the Shadow Army after mastery — skills that feel like PHP power.

### Learn-first rule for Skill Books
Each Skill Book must teach:
1. What the structure/pattern is (plain language)
2. Why it exists / when it helps
3. **Backend Link** — direct or indirect job/backend use (see `18-backend-career-links.md`)
4. A tiny PHP 8.5 example (annotated)
5. Common mistakes
6. A mini CHECK before sending the hunter to related Gates

### One Session = One Pattern (or One Pattern Problem)
- Do not mix Two Pointers with DP in the same session.
- Same rule as the current repo: **Deliver exactly one session item unless the student asks to continue.**
- Prefer teaching one DSA idea until the CHECK passes.

### PLAN → DO → CHECK → ACT Cycle
Transfer it directly to problems:

| Stage | In Current OOP Repo | In Problem Solving |
|:---|:---|:---|
| PLAN | Lecture goal + concepts | Pattern goal + when to use it + expected complexity |
| DO | Analogy then code | Understand problem → brute force → improve → PHP 8.5 code |
| CHECK | One targeted question | Small drill or explain the pattern in your own words |
| ACT | Correct / partial / stuck | Confirm or reteach only the gap |

### 3-Phase Method for Problems
Adapted from the 3-Phase Lecture Method:

**Phase 1 — Before (Scope)**
- One sentence: what is the pattern, and why it matters now?
- 3–5 terms (for example: window, pointer, invariant) with plain-language definitions.
- Link to the previous pattern/problem.

**Phase 2 — During (Solve)**
- Start with a hand-worked example on paper/table before code.
- Brute force first, then the optimized solution.
- Code is shown in chat only; the student types it into `solution-1.php`.
- Annotate every line (zero uncommented lines).
- State Time/Space complexity in plain language.

**Phase 3 — After (Review Card)**
Save `review-N.md` using the same study-card idea:

```markdown
# Pattern NN — Short Title

> [One or two sentences that capture the heart of this pattern]

---

## What you learned
1. ...
2. ...
3. ...

---

## Key rule
> [One sentence to remember]

---

## Watch out
Avoid this common mistake — [common mistake].

---

## When to use
- ...

## Backend Link
- Direct: ...
- Indirect: ...
- Job takeaway: ...

## Complexity
- Time: ...
- Space: ...

## Official / Problem reference
[LeetCode — Problem Name](https://leetcode.com/problems/...)
```

### Analogy Bank → Pattern Intuition Bank
Replace OOP analogies (bakery, house, remote) with a pattern intuition bank:
- Two Pointers = two fingers walking on one line, from opposite ends or in the same direction.
- Sliding Window = a glass frame moving over a row; one element enters, one leaves.
- Hash Map = an address book: key → value in O(1).
- BFS = walk a building floor by floor.
- DFS = go down one corridor to the end before backtracking.
- DP = store answers to subproblems so you do not recompute them.

### Language Rules (Reuse)
- Never introduce an algorithms term without a plain explanation on first use.
- Short sentences.
- No sarcasm and no difficulty-dismissing words (“simply / just”).
- If the question is outside the current session: answer briefly, then return to the current pattern.

### Code Standards (Reuse and Adapt)
1. PHP version: target **PHP 8.5**.
2. Every file starts with `<?php` and should include `declare(strict_types=1);`.
3. Clear naming: `camelCase` for functions, `PascalCase` for classes when used.
4. Solve each problem in a clearly typed function (LeetCode-style signature).
5. Annotate every line in teaching examples.
6. Do not write final solution files for the student.

### Tutor Role (Golden Rule — updated for Gates)
- **Skill Books:** AI may show tiny annotated teaching examples in chat; hunter still types practice files.
- **Gates (problems):** Spoiler protection ON — see `21-hunter-solves-first-no-direct-answers.md`
  - AI explains what the problem wants first
  - Hunter attempts alone
  - If stuck, AI coaches with hints/questions (no direct full solution)
  - Hunter writes every `solution-N.php`
- Do not create the hunter’s solution files with writing tools unless they explicitly ask for a sealed spoiler after real attempts.

### File Conventions for Track 1
```
01-Patterns-And-Fundamentals/
  README.md
  Part-1-Warmup/
    Pattern-01-array-basics/
      solution-1.php
      solution-2.php          // improved version if any
      review-1.md
      notes.md               // optional for hard topics
    Pattern-02-hash-map-lookup/
      ...
  Part-2-Core-Patterns/
    Pattern-10-two-pointers/
    Pattern-11-sliding-window/
    ...
```

Folder naming: `Pattern-NN-kebab-topic` (same style as `Lecture-NN-topic`).

### Milestones Inside Track 1 (Job Change / Association Gates)
Like milestones after lectures 5 / 15 / 24 / 31 — themed as Solo Leveling trials:

| Milestone | Rank Gate | Quest Flavor | Check Idea |
|:---|:---|:---|:---|
| Milestone 1 | D → C | First real hunt | Clear a D-Gate Hash Map problem with no help |
| Milestone 2 | C → B | Job Change Quest | Explain Two Pointers vs Sliding Window + clear one C-Gate |
| Milestone 3 | B → A | High-risk Gate | Simple tree or graph with BFS/DFS |
| Milestone 4 | A → S | Near-death raid | Full Medium/B-Gate with complexity + interview explain |

XP: each passed milestone grants +100 XP, may unlock a **Job/Title**, and is required for rank-up.
On success, print a System notice and (if earned) `[SHADOW EXTRACTION]` / `[JOB CHANGE COMPLETE]`.

### Track Review Checklist Before Moving to Track 2
```
- [ ] Every pattern in the curriculum is marked ✅
- [ ] Every folder has a review-N.md in study-card format
- [ ] Every milestone was passed
- [ ] The student can explain each pattern in two sentences without reading notes
- [ ] The student can rewrite the core solution without copying
- [ ] Weak topics were reviewed again
```

### Skip Ahead Policy
- Skipping is allowed.
- At the start of the session: name dependencies from skipped patterns in one sentence each.
- Offer to go back and fill gaps after the session.

### What Not To Do (Track 1)
- Do not write solution files for the student.
- Do not introduce more than two new patterns in one session.
- Do not show teaching code without line comments.
- Do not move on before CHECK passes.
- Do not jump to the optimal code before brute force / understanding the example.
- Do not mix SOLID/Design Patterns here — they belong to a separate study repo.

---
