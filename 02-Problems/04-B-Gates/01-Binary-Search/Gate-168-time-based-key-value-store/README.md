# Gate 168 🔥 — Time Based Key-Value Store

Status: Not cleared
Related skill: Pattern-13-binary-search
Difficulty: Medium
Gate Rank: B
Min Hunter Rank: B-Rank
XP Reward: 90
Source Platform: LeetCode
Pattern tag: NeetCode PHP-fit

## System Brief
Design a time-based key-value store: `set(key, value, timestamp)` and `get(key, timestamp)` returning the value with the largest timestamp `<=` the query (or empty string).

Timestamps for `set` on the same key are strictly increasing.

## What This Gate Is Testing
Map of key → timeline; binary search on timestamps for get.

## Learn First (System Tutorial)
- Store per-key sorted (timestamp, value) pairs
- Binary search upper bound for get

## Backend Link (Why this matters at work)
### Direct
- Config history, feature flags, price/version lookups “as of” a time.
### Indirect
- Audit trails and point-in-time reads.
### Job takeaway
- "As-of queries are binary search on a timeline."

## Clear Rule
Mark ✅ in `02-Problems/README.md` and update the Status Window only after you can explain and clear it cleanly.

## Source
Source: LeetCode — Time Based Key-Value Store — https://leetcode.com/problems/time-based-key-value-store/ (also NeetCode Binary Search)