# Gate 127 — Bob

Status: Not cleared  
Related skill: Pattern-03-string-basics  
Difficulty: Easy  
Gate Rank: D  
Min Hunter Rank: D-Rank  
XP Reward: 40  
Source Platform: Exercism  
Exercism slug: `bob`  
Pattern tag: Strings / Rules

## System Brief
Exercism classic — Bob answers:
- question (ends with `?`) yelling → `"Calm down, I know what I'm doing!"`
- yelling (all letters caps, has letters) → `"Whoa, chill out!"`
- question → `"Sure."`
- silence (blank) → `"Fine. Be that way!"`
- else → `"Whatever."`

Trim thoughtfully; follow Exercism edge cases when testing.

## What This Gate Is Testing
Priority of rules (yell+question before yell).

## Learn First (System Tutorial)
- Detect question / yell / silence
- Rule order matters

## Backend Link (Why this matters at work)
### Direct
- Chatbot / support auto-replies (toy).
### Indirect
- Spec-ordered branching.
### Job takeaway
- "Response matrices need priority."

## Practice Task
1. Optionally open the Exercism exercise for full tests/mentoring notes
2. Attempt alone in PHP 8.5 — fill `solution-1.php` here
3. Ask for hints only if stuck (Hunter Solves First)

## Files
- `solution-1.php` — **hunter-authored** (stub only shipped)

## Clear Rule
Mark ✅ in `02-Problems/README.md` after a clean clear + explain aloud.

## Source
Source: Exercism — PHP track — Bob — https://exercism.org/tracks/php/exercises/bob  
Track hub: https://exercism.org/tracks/php
