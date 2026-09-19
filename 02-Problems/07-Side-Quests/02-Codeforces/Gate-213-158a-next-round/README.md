# Gate 213 — Next Round

Status: Not cleared  
**Lane:** Side Quest (not required for graduation)  
Related skill: Pattern warmups / contest fluency  
Difficulty: Div.2 A (approx)  
Gate Rank: E (difficulty feel only)  
Min Hunter Rank: E-Rank  
XP Reward: 25 (Side Quest XP — optional)  
Source Platform: Codeforces  
Problem: 158A  
Pattern tag: Arrays

## System Brief
Codeforces 158A: scores descending; advance if score >= k-th place score and > 0.

Pure: `scores` (n ints, non-increasing), `k` (1-based). Return advance count.

Implement as a **pure PHP function** (ignore CF stdin harness for the stub).

## What This Gate Is Testing
Threshold = scores[k-1]; count.

## Learn First (System Tutorial)
- 1-based k
- Zero scores never advance

## Backend Link (Why this matters at work)
### Direct
- Cutoff filters.
### Indirect
- Threshold scans.
### Job takeaway
- "Next round is cutoff + positive."

## Clear Rule
Optional ✅ in `02-Problems/README.md` Side Quest section. Does **not** unlock higher required Gates by itself.

## Source
Source: Codeforces — 158A — Next Round — https://codeforces.com/problemset/problem/158/A  
Hub: https://codeforces.com/
