# Gate 170 — Rotting Oranges

Status: Not cleared  
Related skill: Pattern-20-simple-graphs  
Difficulty: Medium  
Gate Rank: A  
Min Hunter Rank: A-Rank  
XP Reward: 130  
Source Platform: LeetCode  
LeetCode #: 994  
Pattern tag: BFS / Grid

## System Brief
LeetCode 994: each minute, rotten oranges infect adjacent fresh ones. Minutes until all rotten (−1 if impossible).

Example: `[[2,1,1],[1,1,0],[0,1,1]]` → `4`.

## What This Gate Is Testing
Multi-source BFS from all 2s.

## Learn First (System Tutorial)
- Queue initial rotters
- Count fresh

## Backend Link (Why this matters at work)
### Direct
- Infection / fan-out simulations.
### Indirect
- Multi-source BFS.
### Job takeaway
- "Rot spreads as layered BFS."

## Clear Rule
Mark ✅ in the track README / Gate map after a clean clear.

## Source
Source: LeetCode — 994. Rotting Oranges — https://leetcode.com/problems/rotting-oranges/  
Problemset catalog: https://leetcode.com/problemset/
