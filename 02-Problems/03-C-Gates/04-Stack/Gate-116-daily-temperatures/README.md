# Gate 116 — Daily Temperatures

Status: Not cleared  
Related skill: Pattern-12-stack-queue  
Difficulty: Medium  
Gate Rank: C  
Min Hunter Rank: C-Rank  
XP Reward: 60  
Source Platform: LeetCode  
LeetCode #: 739  
Pattern tag: Monotonic Stack

## System Brief
LeetCode 739: for each day, how many days until a warmer temperature (0 if none).

Example: `[73,74,75,71,69,72,76,73]` → `[1,1,4,2,1,1,0,0]`.

## What This Gate Is Testing
Monotonic decreasing stack of indices.

## Learn First (System Tutorial)
- Stack of unresolved days
- Distance = j - i

## Backend Link (Why this matters at work)
### Direct
- Next-greater queries (SLAs, alerts).
### Indirect
- Monotonic stacks.
### Job takeaway
- "Next greater is a stack pattern."

## Clear Rule
Mark ✅ in the track README / Gate map after a clean clear.

## Source
Source: LeetCode — 739. Daily Temperatures — https://leetcode.com/problems/daily-temperatures/  
Catalog inspiration (solutions NOT copied): https://github.com/LeetCode-in-Php/LeetCode-in-Php
