# Gate 085 — Small Enough

Status: Not cleared  
Related skill: Pattern-01-array-basics  
Difficulty: 7 kyu  
Gate Rank: D  
Min Hunter Rank: D-Rank  
XP Reward: 40  
Source Platform: Codewars  
Pattern tag: Arrays / Validation

## System Brief
Return true if every value in the list is `<= limit`.

Example: `[66, 101], 200` → `true`.

## What This Gate Is Testing
All-elements predicate.

## Learn First (System Tutorial)
- Early exit on failure
- Empty list → true (usual convention — document if you disagree)

## Backend Link (Why this matters at work)
### Direct
- Payload size guards, max field checks.
### Indirect
- Validation scans.
### Job takeaway
- "Validate all items against a limit."

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
Source: Codewars — PHP kata (~7 kyu) — Small Enough — https://www.codewars.com/kata/search/php
