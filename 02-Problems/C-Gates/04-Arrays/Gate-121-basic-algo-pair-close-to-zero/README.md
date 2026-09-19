# Gate 121 — Pair Closest to Zero Sum

Status: Not cleared  
Related skill: Pattern-10-two-pointers  
Difficulty: Medium  
Gate Rank: C  
Min Hunter Rank: C-Rank  
XP Reward: 60  
Source Platform: w3resource  
w3resource section: PHP Basic Algorithm  
Pattern tag: Basic Algorithm

## System Brief
w3resource-style basic-algorithm drill: given a list of ints (length >= 2), return any pair `[a, b]` whose sum is closest to zero (minimize abs(a+b)). If ties, any closest pair is OK.

Example idea: `[1, 60, -10, 70, -80, 85]` → `[-80, 85]` (sum 5) — verify with your tests.

Brute force OK first; optimize later.

## What This Gate Is Testing
Search pairs; track best abs sum.

## Learn First (System Tutorial)
- Nested loops first
- Optional sort + two pointers later

## Backend Link (Why this matters at work)
### Direct
- Balancing credits/debits near zero.
### Indirect
- Optimization after brute.
### Job takeaway
- "Closest-to-target is a search pattern."

## Practice Task
1. Read the brief (optionally browse the section link)
2. Attempt alone in PHP 8.5 — fill `solution-1.php`
3. Ask for hints only if stuck (Hunter Solves First)

## Files
- `solution-1.php` — **hunter-authored** (stub only shipped)

## Clear Rule
Mark ✅ in `02-Problems/README.md` (Side Quest section if applicable) after a clean clear.

## Source
Source: w3resource — PHP Basic Algorithm — Pair Closest to Zero Sum — https://www.w3resource.com/php-exercises/php-basic-algorithm-exercises.php  
Hub: https://www.w3resource.com/php-exercises/
