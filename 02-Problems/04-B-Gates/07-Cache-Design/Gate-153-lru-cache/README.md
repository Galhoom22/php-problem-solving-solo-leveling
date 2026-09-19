# Gate 153 — LRU Cache

Status: Not cleared
Related skill: Pattern-22-lru-cache-design
Difficulty: Medium
Gate Rank: B
Min Hunter Rank: B-Rank
XP Reward: 90
Source Platform: LeetCode

## System Brief
Design LRUCache with `get` / `put` in average O(1) if possible.

Example: capacity `2` — `put(1,1)`, `put(2,2)`, `get(1)` → `1`, `put(3,3)` evicts key `2`, `get(2)` → `-1`.

Implement with PHP arrays/`Spl` — document your choice in notes.md if useful.

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

## Clear Rule
Mark ✅ in `02-Problems/README.md` and update the Status Window only after you can explain and clear it cleanly.

## Source
Source: LeetCode — https://leetcode.com/problems/lru-cache/
