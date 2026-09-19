# Gate 054 — Remove Duplicates Keep Order

Status: Not cleared  
Related skill: Pattern-02-hash-map-lookup  
Difficulty: Medium  
Gate Rank: C  
Min Hunter Rank: C-Rank  
XP Reward: 60  
Source Platform: W3Schools  
Pattern tag: Hashing

## System Brief
Remove duplicate numbers from a list while **keeping first-seen order**.

Example: `[1,2,1,3,2]` → `[1,2,3]`.

## What This Gate Is Testing
Seen-set + stable output.

## Learn First (System Tutorial)
- Associative array as set
- Preserve insertion order (PHP arrays do)

## Backend Link (Why this matters at work)
### Direct
- Dedupe IDs in request batches.
### Indirect
- Idempotent list cleaning.
### Job takeaway
- "Seen-sets dedupe streams."

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
Source: W3Schools — Practice PHP Coding Problems — Remove Duplicates Keep Order — https://www.w3schools.com/php/exercise.asp
