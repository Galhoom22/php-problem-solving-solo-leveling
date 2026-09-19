# Gate 164 — Combination Sum

Status: Not cleared  
Related skill: Pattern-21-memoization-dp-intro  
Difficulty: Medium  
Gate Rank: B  
Min Hunter Rank: B-Rank  
XP Reward: 90  
Source Platform: LeetCode  
LeetCode #: 39  
Pattern tag: Backtracking

## System Brief
LeetCode 39: combinations from `candidates` (unique) that sum to `target`; reuse allowed.

Example: `candidates=[2,3,6,7]`, `target=7` → `[[2,2,3],[7]]`.

## What This Gate Is Testing
Backtracking with remaining sum.

## Learn First (System Tutorial)
- Start index to avoid dup order
- Reuse same index when allowed

## Backend Link (Why this matters at work)
### Direct
- Budget allocation combos (small).
### Indirect
- Bounded search.
### Job takeaway
- "Combination sum is reuse-aware DFS."

## Clear Rule
Mark ✅ in the track README / Gate map after a clean clear.

## Source
Source: LeetCode — 39. Combination Sum — https://leetcode.com/problems/combination-sum/  
Catalog inspiration (solutions NOT copied): https://github.com/LeetCode-in-Php/LeetCode-in-Php
