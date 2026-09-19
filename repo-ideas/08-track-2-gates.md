# 08 — Track 2: Gates (Problems Bank)

> AI load this for Gate folders, README template, source map, and problem session cycle.

## 6. Track 2 Ideas — Problems Bank

Inspired by `02-Interview-Questions/`.

### Session Principle
Treat every Gate like a mini dungeon run that **teaches and tests** — with spoiler protection:

1. Confirm the Gate Rank is unlocked for the hunter’s current Rank.
2. **Learn First (concepts only)** — any missing PHP idea needed (tiny examples OK; no Gate answer).
3. AI delivers the **Problem Brief**: what the Gate wants (I/O, examples, constraints).
4. Hunter **attempts alone** in PHP 8.5 (`solution-1.php` created by hunter).
5. If stuck → coaching ladder (questions → hints → scaffold) — help them **find** the path (`21`).
6. Hunter revises; AI reviews gaps — still no full spoiler dump by default.
7. End with CHECK (understanding, not only “code runs”).
8. Mark ✅ and grant XP only after a clear solution and a passed practice task.
9. A `Source:` line is mandatory at the end of each Gate `README.md`.

**Do not** author Gates with finished reference solutions as the default files.
A Gate that only pastes a final solution with no teaching is **invalid**.
A session that starts with a full AI solution is **invalid**.

### Gate Organization (Hunter Rank First)
Prefer **Gate-rank folders**, optionally nested by pattern:

```
02-Problems/
  E-Gates/                        ← E-Rank
    01-PHP-Arrays-Basics/
    02-Strings/
  D-Gates/                        ← D-Rank
    01-Arrays-Hashing/
  C-Gates/                        ← C-Rank
    02-Two-Pointers/
    03-Sliding-Window/
  B-Gates/                        ← B-Rank
    04-Stack-Queue/
    05-Binary-Search/
    06-Nested-Trees/
    07-Intervals/
    08-Heap-TopK/
    09-Cache-Design/              ← LRU etc.
  A-Gates/                        ← A-Rank
    10-Simple-Graphs/
    11-Memoization-DP-Intro/
    12-Light-Backtracking/
  S-Gates/                        ← S-Rank+ prestige (still PHP-fit only)
  Side-Quests/                    ← NOT required (Interview Theater / CP extras)
```

Keep Easy/Medium/Hard as a **label inside each Gate**, but unlock rules follow **Gate Rank + Hunter Rank**.
Every Gate must pass `19-php-fitness-filter.md` before entering required folders.

Inside each group:
```
Gate-001-two-sum/
  README.md
  solution-1.php      // first attempt (often brute / first understanding)
  solution-2.php      // improved clear after feedback
  notes.md            // interview-style explanation
  review.md           // optional: skill card / shadow notes
```

### Per-Gate README Template
```markdown
# Gate 001 - Two Sum

Status: Not cleared
Related skill: Pattern-02-hash-map-lookup
Difficulty: Easy
Gate Rank: D
Min Hunter Rank: D-Rank
XP Reward: 40
Level Suggest: 6–10
Source Platform: LeetCode
Also Seen On: (optional) HackerRank / GFG variants
Folder: `02-Problems/D-Gates/01-Arrays-Hashing/Gate-001-two-sum/`

## System Brief
[Short statement + examples — paraphrase if needed; link full statement in Source]

## What This Gate Is Testing
Whether you can replace nested loops with a hash map lookup.

## Learn First (System Tutorial)
- What is a hash map in plain language?
- Tiny PHP example of key → value lookup
- Why nested loops become slow

## Backend Link (Why this matters at work)
### Direct
- Same idea as caching `userId → user` or counting events by key in an API pipeline.
### Indirect
- Trains replacing O(n²) scans with better structures before endpoints time out.
### Job-market takeaway
- "Hash maps teach me O(1) lookups instead of scanning lists in backend code."

## Walkthrough
*(Filled after the hunter's attempt — or as guided discovery, never as opening spoiler)*
- Brute force idea
- Optimized idea
- Why this approach fits

## Practice Task
1. Read the brief
2. Attempt alone in PHP 8.5
3. Ask for hints only if stuck (`21`)

## Files You May Create Here
- `solution-1.php` — **hunter-authored** first attempt (start from stub/TODO if needed)
- `solution-2.php` — hunter’s improved version after coaching
- `notes.md` — hunter’s explanation

Do **not** ship finished answer files in the Gate folder by default.

## Clear Rule
Mark ✅ in `../README.md` and update the Status Window only after you can explain and clear it cleanly.
On mastery of the related pattern, attempt Shadow Extraction (`Arise`).

## Progression Note
This Gate must stay after easier hashing warmups and before Medium multi-pointer Gates.
After this Gate, the hunter should be stronger at hashing — not only have one more ✅.

## FAANG Transfer Note (optional)
- Pattern: Hash Map Lookup
- 30-second interview line: "I'll trade nested loops for a hash map from value to index."
- Same idea in Python `dict`, Java `HashMap`, JS `Map` / object — complexity unchanged

## Source
Source: LeetCode — https://leetcode.com/problems/two-sum/
```

### Gate Source Map
Maintain in `02-Problems/README.md` (and optionally `SOURCES.md`) a table like:

| Gate | Title | Gate Rank | Pattern | Platform | URL | XP |
|:---|:---|:---:|:---|:---|:---|:---:|
| 001 | Two Sum | D | Hashing | LeetCode | https://leetcode.com/problems/two-sum/ | 40 |
| 002 | ... | E | Basics | Edabit / Exercism | ... | 25 |

Include Codeforces / Codewars / HackerRank / etc. the same way. Deduplicate cross-posted problems into one Gate with multiple Sources.

### Session Cycle for Gates
Same PLAN / DO / CHECK / ACT, with DO specialized as:
1. Restate the Gate in your own words.
2. Ambiguous? Ask about constraints.
3. Hand-worked example.
4. Brute force.
5. Bottleneck?
6. Matching skill/pattern?
7. Small PHP 8.5 code, then improve.
8. Complexity.
9. Edge cases.
10. Award XP / update Status Window if CHECK passed.
11. System notice if Level Up / Shadow progress.

### Progress List
Grouped by Gate Rank:
```
[D-Gate | D-Rank] Gate 001 - Two Sum
[D-Gate | D-Rank] Gate 002 - Valid Anagram
[C-Gate | C-Rank] Gate 018 - Best Time to Buy and Sell Stock
...
```
Mark ✅ on clear and note XP earned.

### Gates Checklist (before Instant Dungeons)
Before Track 3 Instant Dungeons (usually needs B-Rank+):
```
- [ ] Hunter Rank is at least B-Rank
- [ ] Required E/D/C/B core Gates marked ✅ in ascending difficulty order
- [ ] No harder-before-easier violations in the climb path
- [ ] Every folder has a README.md that ends with Source Platform + URL
- [ ] Cleared Gates have Status: Cleared
- [ ] Status Window (XP/Level/Rank/Shadows) is synced
- [ ] You can explain each clear out loud in interview style
- [ ] You can connect each Gate back to its skill
- [ ] Harder/weak Gates have notes.md
- [ ] Weak Gates were re-cleared until fluent
```

---
