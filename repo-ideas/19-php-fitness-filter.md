# 19 — PHP Fitness Filter (Keep Only PHP-Natural Training)

> AI load this **before importing any Gate** and when editing the curriculum.
> This repo is **PHP-specialized** Problem Solving + DSA — not language-agnostic puzzle grinding.

---

## Core stance

This is **not** “DSA in any language, answers happen to be PHP”.

This **is**:
> Train Problem Solving + DSA **the PHP way** — using structures, idioms, and scenarios that make a PHP learner feel the skill belongs to PHP and backend PHP work.

If a hunter finishes a Gate and thinks:
> “This has nothing to do with PHP…”
then the Gate failed the PHP Fitness Filter.

---

## The PHP Fitness Test (mandatory)

Before a problem enters the **required climb**, answer YES to most of these:

1. **PHP-natural data model?** Uses arrays, associative arrays, strings, simple objects — not pointer gymnastics.
2. **Idiomatic to write in PHP 8.5?** A solid PHP backend/dev would not laugh at this exercise.
3. **Teaches PHP muscle?** Practices real PHP tools (`array_*`, loops, maps, `Spl*` when useful, typed functions, string handling).
4. **Backend Link exists?** Direct or indirect job value for PHP backends (see `18-backend-career-links.md`).
5. **Feeling check:** After clearing, the hunter feels stronger **as a PHP problem solver**, not only as a generic LeetCode athlete.

If mostly NO → **do not put it in the required path**.
It may become:
- excluded entirely, or
- a tiny optional “Interview Side Quest” (FAANG pointer theater) with a clear warning label

---

## Prefer (PHP-first training)

| Family | Why it fits PHP |
|:---|:---|
| Arrays / lists | PHP’s primary workhorse |
| Associative arrays / hashing | Native PHP maps; caching, counting, indexing |
| Strings | Validation, parsing, APIs, text pipelines |
| Stack / Queue via arrays | Natural with `array_push` / `array_shift` / `SplQueue` |
| Sliding window / two pointers on arrays | Fits API/log/stream-style thinking |
| Nested arrays / tree-like JSON structures | Categories, menus, configs, comments |
| Simple BFS/DFS on arrays-of-arrays | Permissions, relations, nested walks |
| Heaps via `SplPriorityQueue` | Priority jobs, top-K |
| Intervals | Booking, schedules, windows |
| Frequency / top-K / dedupe | Analytics, webhooks, idempotency |
| LRU / cache design | Extremely PHP-backend relevant |
| Sorting + searching | Reports, feeds, lookups |
| Recursion on nested structures | Nested resources, tree exports |
| Light memoization / DP intro | “don’t recompute” + caching mindset |

Teach these with **PHP idioms** in Skill Books (how PHP arrays differ from C++ vectors, how assoc arrays are hash maps, references, copy-on-write awareness at a simple level when useful).

---

## Remove / do not put in the required climb

These often make learners feel the training is “not about PHP”:

| Reject or demote | Why |
|:---|:---|
| Heavy **linked-list pointer** drills (reverse list, detect cycle on nodes, etc.) | PHP backends almost never hand-build linked lists; arrays dominate |
| **Segment trees / Fenwick / heavy CP data structures** | Not PHP day-job reality |
| Hardcore **bit-twiddling contests** | Rare in PHP product work; feels alien |
| Pure **math olympiad / number theory** CP | Weak PHP identity unless framed as PHP numerics practice (usually skip for core) |
| Extreme **graph contest** packs (flows, exotic shortest paths) | Keep only simple adjacency-list BFS/DFS with backend stories |
| **Union-Find** as a core required track | Niche; optional side only |
| Problems that only shine with **manual memory / pointers** | Wrong language culture |
| Kata that are “clever language trivia” with **no PS/DSA/backend transfer** | Noise |
| Importing CF/AtCoder-style problems just because they are famous | Fail PHP-feeling test |

### Special case: Linked Lists
- **Required climb:** remove classic linked-list Gate chains.
- **Keep:** LRU Cache (as cache/design — implement with PHP arrays/`Spl` structures, not “prove you can reverse a list”).
- Optional tiny Side Quest / **Interview Armor** (Track 4) for FAANG list drills — after PHP-fit foundations:
  labeled as interview preparation, required only for Big Tech/FAANG graduation (`20`)

### Special case: FAANG classics that are awkward in PHP
Some Blind 75 items are interview-famous but PHP-unnatural (especially linked-list pointer drills).

Rule:
- **Required climb = PHP-fit first** (this filter).
- Prefer a PHP-natural substitute that trains the same thinking.
- Do not force C++/Java-shaped problems into the PHP core just for FAANG cosplay.
- FAANG transfer remains via **patterns that still feel native in PHP** (hashing, windows, BFS on nested data, heaps, intervals…).
- PHP-unnatural interview drills may exist only in **Track 4 Interview Armor** (graduation) or labeled Side Quests — never early core.

Curriculum consequence: `11-core-curriculum.md` + `17-faang-prep-and-language-transfer.md`.

---

## Source import bias (update to multi-platform policy)

**Prefer importing from:**
- Codewars PHP, Exercism PHP, Edabit PHP, HackerRank (array/string), LeetCode Easy/Medium that map cleanly to PHP arrays/strings/maps
- Backend-shaped scenarios rewritten as Gates

**Import cautiously / rarely into required path:**
- Codeforces / CodeChef / SPOJ heavy CP
- Project Euler pure math (optional INT side quests only)
- Graph/DP contest archives

**Always run PHP Fitness Test** after mapping Gate Rank.

---

## PHP-native teaching expectations

When a Gate is accepted, teaching must show PHP flavor, for example:
- “In PHP this is an associative array, not a custom HashMap class.”
- “We use `SplPriorityQueue` / array heap simulation — here’s why.”
- “Nested JSON from an API is a tree of arrays/objects — DFS fits.”
- “Rate limiting last 60 seconds is a sliding window over timestamps.”

Avoid teaching that sounds like translated C++ with PHP syntax glued on.

---

## Curriculum consequence

The required climb in `11-core-curriculum.md` must only list PHP-fit Gates.
Anything removed from core may:
1. disappear, or
2. live under `07-Side-Quests/` with explicit non-core labeling

---

## AI gatekeeping checklist
```
- [ ] PHP Fitness Test passed
- [ ] Uses PHP-natural structures
- [ ] Backend Link written
- [ ] Skill Book shows PHP idiom (not C++-in-PHP)
- [ ] Not linked-list pointer theater (unless labeled Side Quest)
- [ ] Not heavy CP structure (segment tree / fenwick / etc.)
- [ ] Hunter would feel this strengthens PHP problem solving
```

If checklist fails → **do not add to required climb**.
