# Gate 129 — Isogram

Status: Not cleared  
Related skill: Pattern-02-hash-map-lookup  
Difficulty: Easy  
Gate Rank: D  
Min Hunter Rank: D-Rank  
XP Reward: 40  
Source Platform: Exercism  
Exercism slug: `isogram`  
Pattern tag: Hashing / Strings

## System Brief
Exercism-style: an isogram has no repeating letters (ignore case; ignore non-letters like hyphens/spaces).

Examples: `"lumberjacks"` → true; `"isograms"` → false; `"six-year-old"` → true.

## What This Gate Is Testing
Normalize letters + seen-set.

## Learn First (System Tutorial)
- Filter letters only
- Case fold

## Backend Link (Why this matters at work)
### Direct
- Unique-token validation.
### Indirect
- Set membership.
### Job takeaway
- "Uniqueness checks use sets."

## Practice Task
1. Optionally open the Exercism exercise for full tests/mentoring notes
2. Attempt alone in PHP 8.5 — fill `solution-1.php` here
3. Ask for hints only if stuck (Hunter Solves First)

## Files
- `solution-1.php` — **hunter-authored** (stub only shipped)

## Clear Rule
Mark ✅ in `02-Problems/README.md` after a clean clear + explain aloud.

## Source
Source: Exercism — PHP track — Isogram — https://exercism.org/tracks/php/exercises/isogram  
Track hub: https://exercism.org/tracks/php
