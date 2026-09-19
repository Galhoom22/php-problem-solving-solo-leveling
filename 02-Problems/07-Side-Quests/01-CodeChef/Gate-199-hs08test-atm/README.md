# Gate 199 — ATM Withdrawal

Status: Not cleared
**Lane:** Side Quest (not required for graduation)
Related skill: Pattern-04-big-o-plain-talk
Difficulty: Beginner
Gate Rank: D (difficulty feel only)
Min Hunter Rank: D-Rank
XP Reward: 40 (Side Quest XP — optional)
Source Platform: CodeChef
Problem code: `HS08TEST`
Pattern tag: Conditions / Money

## System Brief
Side Quest (CodeChef HS08TEST): ATM: withdraw `X` (integer) from balance `Y` (float). If `X` is multiple of 5 and `Y >= X + 0.50`, return `Y - X - 0.50`, else return `Y` unchanged.

Example idea: `X=30, Y=120.00` → `89.50`.

## What This Gate Is Testing
Business rule + float money care.

## Learn First (System Tutorial)
- Fee 0.50
- Multiple of 5 check
- Float formatting in notes if printing

## Backend Link (Why this matters at work)
### Direct
- Payment rule engines (simplified).
### Indirect
- Money edge cases.
### Job takeaway
- "Fees and constraints gate the happy path."

## Clear Rule
Optional ✅ in `02-Problems/README.md` Side Quest section. Does **not** unlock higher required Gates by itself.

## Source
Source: CodeChef — HS08TEST — ATM Withdrawal — https://www.codechef.com/problems/HS08TEST
Practice hub (limited listing): https://www.codechef.com/practice/php
