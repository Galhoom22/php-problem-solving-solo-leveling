# Gate 051 — Most Common Character

Status: Not cleared  
Related skill: Pattern-02-hash-map-lookup  
Difficulty: Easy  
Gate Rank: D  
Min Hunter Rank: D-Rank  
XP Reward: 40  
Source Platform: W3Schools  
Pattern tag: Hashing

## System Brief
Return the character that appears most often in a non-empty string. If tied, return the one that appears first in the string.

Example: `"aabbc"` → `"a"` (tie a/b — first max wins).

## What This Gate Is Testing
Frequency map + tie-break by first occurrence.

## Learn First (System Tutorial)
- Count then scan for max
- Stable tie-break

## Backend Link (Why this matters at work)
### Direct
- Mode of categorical data.
### Indirect
- Top-1 from a histogram.
### Job takeaway
- "Mode is max over a frequency map."

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
Source: W3Schools — Practice PHP Coding Problems — Most Common Character — https://www.w3schools.com/php/exercise.asp
