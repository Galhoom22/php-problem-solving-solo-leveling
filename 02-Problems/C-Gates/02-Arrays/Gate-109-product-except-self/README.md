# Gate 109 — Product of Array Except Self

Status: Not cleared  
Related skill: Pattern-01-array-basics  
Difficulty: Medium  
Gate Rank: C  
Min Hunter Rank: C-Rank  
XP Reward: 60  
Source Platform: LeetCode  
LeetCode #: 238  
Pattern tag: Prefix / Arrays

## System Brief
LeetCode 238: return array `answer` where `answer[i]` is product of all elements except `nums[i]`. Avoid division; aim O(n).

Example: `[1,2,3,4]` → `[24,12,8,6]`.

## What This Gate Is Testing
Prefix and suffix products.

## Learn First (System Tutorial)
- Left products then right pass
- No division requirement

## Backend Link (Why this matters at work)
### Direct
- Contribution excluding self (analytics).
### Indirect
- Two-pass prefix thinking.
### Job takeaway
- "Prefix/suffix beats naive nested loops."

## Clear Rule
Mark ✅ in the track README / Gate map after a clean clear.

## Source
Source: LeetCode — 238. Product of Array Except Self — https://leetcode.com/problems/product-of-array-except-self/  
Catalog inspiration (solutions NOT copied): https://github.com/LeetCode-in-Php/LeetCode-in-Php
