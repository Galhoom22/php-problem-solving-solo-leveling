# Gate 055 — Rotate Left

Status: Not cleared  
Related skill: Pattern-10-two-pointers  
Difficulty: Medium  
Gate Rank: C  
Min Hunter Rank: C-Rank  
XP Reward: 60  
Source Platform: W3Schools  
Pattern tag: Arrays

## System Brief
Rotate a list left by `k` positions (`k` may be >= length — normalize with modulo).

Example: `[1,2,3,4,5]`, `k = 2` → `[3,4,5,1,2]`.

## What This Gate Is Testing
Index arithmetic / slice + concat.

## Learn First (System Tutorial)
- Normalize with `$k % n` (when `n > 0`)
- `array_slice` patterns

## Backend Link (Why this matters at work)
### Direct
- Round-robin queues, rotating banners.
### Indirect
- Modular indexing.
### Job takeaway
- "Rotation is modular indexing."

## Practice Task
1. Read the brief
2. Attempt alone in PHP 8.5 — fill `solution-1.php`
3. Ask for hints only if stuck (Hunter Solves First)

## Files
- `solution-1.php` — **hunter-authored** (stub only shipped)
- `solution-2.php` — optional improved clear (you create)
- `notes.md` — optional interview-style explanation (you create)

## Clear Rule
Mark ✅ in `02-Problems/README.md` and update the Status Window only after you can explain and clear it cleanly.

## Source
Source: W3Schools — Practice PHP Coding Problems — Rotate Left — https://www.w3schools.com/php/exercise.asp
