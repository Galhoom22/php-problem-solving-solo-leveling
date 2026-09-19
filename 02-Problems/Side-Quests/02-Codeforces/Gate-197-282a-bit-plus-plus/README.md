# Gate 197 — Bit++

Status: Not cleared  
**Lane:** Side Quest (not required for graduation)  
Related skill: Pattern warmups / contest fluency  
Difficulty: Div.2 A (approx)  
Gate Rank: E (difficulty feel only)  
Min Hunter Rank: E-Rank  
XP Reward: 25 (Side Quest XP — optional)  
Source Platform: Codeforces  
Problem: 282A  
Pattern tag: Strings / Simulation

## System Brief
Codeforces 282A: start x=0; each statement is `++X`/`X++` or `--X`/`X--`. Return final x.

Example: `["++X","++X","--X"]` → `1`.

Implement as a **pure PHP function** (ignore CF stdin harness for the stub).

## What This Gate Is Testing
Detect plus vs minus in token.

## Learn First (System Tutorial)
- Scan ops
- Ignore position of X

## Backend Link (Why this matters at work)
### Direct
- Counter deltas from ops.
### Indirect
- Token simulation.
### Job takeaway
- "Bit++ is apply deltas."

## Clear Rule
Optional ✅ in `02-Problems/README.md` Side Quest section. Does **not** unlock higher required Gates by itself.

## Source
Source: Codeforces — 282A — Bit++ — https://codeforces.com/problemset/problem/282/A  
Hub: https://codeforces.com/
