# Gate 120 — Digits Only Check

Status: Not cleared  
Related skill: Pattern-03-string-basics  
Difficulty: Easy  
Gate Rank: D  
Min Hunter Rank: D-Rank  
XP Reward: 40  
Source Platform: w3resource  
w3resource section: PHP Regular Expression  
Pattern tag: Regular Expression (light)

## System Brief
w3resource-style regex drill (light): return true if the string contains **only** digits `0-9` (empty → false).

Example: `"42"` → `true`; `"4a2"` → `false`.

Prefer `preg_match` or ctype_digit — document choice.

## What This Gate Is Testing
Full-string digit validation.

## Learn First (System Tutorial)
- Anchors ^ $
- Or ctype_digit

## Backend Link (Why this matters at work)
### Direct
- ID validation, numeric codes.
### Indirect
- Input sanitization mindset.
### Job takeaway
- "Validate whole strings, not substrings only."

## Practice Task
1. Read the brief (optionally browse the section link)
2. Attempt alone in PHP 8.5 — fill `solution-1.php`
3. Ask for hints only if stuck (Hunter Solves First)

## Files
- `solution-1.php` — **hunter-authored** (stub only shipped)

## Clear Rule
Mark ✅ in `02-Problems/README.md` (Side Quest section if applicable) after a clean clear.

## Source
Source: w3resource — PHP Regular Expression — Digits Only Check — https://www.w3resource.com/php-exercises/php-regular-expression-exercises.php  
Hub: https://www.w3resource.com/php-exercises/
