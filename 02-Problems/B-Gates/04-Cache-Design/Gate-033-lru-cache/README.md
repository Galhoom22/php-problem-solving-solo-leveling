# Gate 033 — LRU Cache

Status: Not cleared  
Related skill: Pattern-22-lru-cache-design  
Difficulty: Medium  
Gate Rank: B  
Min Hunter Rank: B-Rank  
XP Reward: 90  
Source Platform: LeetCode

## System Brief
Design LRUCache with `get` / `put` in average O(1) if possible.

See LeetCode for examples. Implement with PHP arrays/`Spl` — document your choice in notes.md.

## What This Gate Is Testing
Capacity-limited cache with least-recently-used eviction.

## Learn First (System Tutorial)
- What LRU means
- Why backends care about cache eviction

## Backend Link (Why this matters at work)
### Direct
- Response caches, computed result memo with capacity.
### Indirect
- Memory vs freshness tradeoffs.
### Job takeaway
- "LRU is career gold for PHP backends."

## Practice Task
1. Read the brief (and Source link if external)
2. Attempt alone in PHP 8.5 — fill `solution-1.php`
3. Ask for hints only if stuck (Hunter Solves First)

## Files
- `solution-1.php` — **hunter-authored** (stub only shipped)
- `solution-2.php` — optional improved clear (you create)
- `notes.md` — optional interview-style explanation (you create)

## Clear Rule
Mark ✅ in `02-Problems/README.md` and update the Status Window only after you can explain and clear it cleanly.

## Source
Source: LeetCode — https://leetcode.com/problems/lru-cache/
