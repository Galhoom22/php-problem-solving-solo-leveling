# Gate 185 — House Robber

Status: Not cleared  
Related skill: Pattern-21-memoization-dp-intro  
Difficulty: Medium  
Gate Rank: A  
Min Hunter Rank: A-Rank  
XP Reward: 130  
Source Platform: LeetCode  
LeetCode #: 198  
Pattern tag: DP 1D

## System Brief
LeetCode 198: max money without robbing adjacent houses.

Example: `[1,2,3,1]` → `4`.

## What This Gate Is Testing
DP: rob / skip.

## Learn First (System Tutorial)
- dp[i] = max(dp[i-1], dp[i-2]+nums[i])
- Related to Climbing Stairs

## Backend Link (Why this matters at work)
### Direct
- Capacity planning with adjacency constraints.
### Indirect
- 1D DP template.
### Job takeaway
- "Adjacent exclusion is classic DP."



## Related Gates
- Gate 186 House Robber II — circular variant

## Clear Rule
Mark ✅ in the track README / Gate map after a clean clear.

## Source
Source: LeetCode — 198. House Robber — https://leetcode.com/problems/house-robber/  
Catalog inspiration (solutions NOT copied): https://github.com/LeetCode-in-Php/LeetCode-in-Php
