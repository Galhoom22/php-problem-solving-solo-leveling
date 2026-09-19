# Gate 175 — Minimum Path Sum

Status: Not cleared  
Related skill: Pattern-21-memoization-dp-intro  
Difficulty: Medium  
Gate Rank: A  
Min Hunter Rank: A-Rank  
XP Reward: 130  
Source Platform: LeetCode  
LeetCode #: 64  
Pattern tag: DP 2D

## System Brief
LeetCode 64: min path sum from top-left to bottom-right (right/down only).

Example: `[[1,3,1],[1,5,1],[4,2,1]]` → `7`.

## What This Gate Is Testing
dp[r][c] = grid + min(up,left).

## Learn First (System Tutorial)
- Pair with Unique Paths
- In-place optional

## Backend Link (Why this matters at work)
### Direct
- Cost grids.
### Indirect
- Min-cost DP.
### Job takeaway
- "Path cost is neighbor mins."

## Clear Rule
Mark ✅ in the track README / Gate map after a clean clear.

## Source
Source: LeetCode — 64. Minimum Path Sum — https://leetcode.com/problems/minimum-path-sum/  
Catalog inspiration (solutions NOT copied): https://github.com/LeetCode-in-Php/LeetCode-in-Php.github.io · https://leetcode-in-php.github.io/
