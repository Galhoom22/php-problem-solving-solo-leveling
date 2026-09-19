# Gate 098 — Bit Counting

Status: Not cleared  
Related skill: Pattern-04-big-o-plain-talk  
Difficulty: 6 kyu  
Gate Rank: C  
Min Hunter Rank: C-Rank  
XP Reward: 60  
Source Platform: Codewars  
Pattern tag: Bits (light)

## System Brief
Write a function that takes an integer and returns the number of bits that are `1` in its binary representation (Hamming weight).

Example: `1234` → `5`.

PHP-fit note: implement via binary string or bit ops — document choice in notes. Light bit practice only.

## What This Gate Is Testing
Count set bits.

## Learn First (System Tutorial)
- decbin + count 1s, or n & (n-1) loop
- Non-negative focus

## Backend Link (Why this matters at work)
### Direct
- Feature flags packed in ints (rare in PHP apps).
### Indirect
- Awareness of binary representation.
### Job takeaway
- "I can reason about bit counts when needed."

## Practice Task
1. Read the brief (confirm details on Codewars if needed)
2. Attempt alone in PHP 8.5 — fill `solution-1.php`
3. Ask for hints only if stuck (Hunter Solves First)

## Files
- `solution-1.php` — **hunter-authored** (stub only shipped)
- `solution-2.php` — optional improved clear (you create)
- `notes.md` — optional interview-style explanation (you create)

## Clear Rule
Mark ✅ in `02-Problems/README.md` and update the Status Window only after you can explain and clear it cleanly.

## Source
Source: Codewars — PHP kata (~6 kyu) — Bit Counting — https://www.codewars.com/kata/search/php
