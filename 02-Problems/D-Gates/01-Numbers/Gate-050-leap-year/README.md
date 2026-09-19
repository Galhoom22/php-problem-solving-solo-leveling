# Gate 050 — Leap Year

Status: Not cleared
Related skill: Pattern-04-big-o-plain-talk
Difficulty: Easy
Gate Rank: D
Min Hunter Rank: D-Rank
XP Reward: 40
Source Platform: W3Schools
Pattern tag: Condition Logic

## System Brief
Return whether `year` is a Gregorian leap year.
Rule: divisible by 400 → leap; by 100 → not; by 4 → leap; else not.

Example: `2000` → `true`; `1900` → `false`; `2024` → `true`.

## What This Gate Is Testing
Ordered calendar rules.

## Learn First (System Tutorial)
- Divisibility chain
- Don't invert 100/400 order

## Backend Link (Why this matters at work)
### Direct
- Scheduling, billing periods, cron edge cases.
### Indirect
- Spec-faithful condition trees.
### Job takeaway
- "Business rules need exact order."

## Clear Rule
Mark ✅ in `02-Problems/README.md` and update the Status Window only after you can explain and clear it cleanly.

## Source
Source: W3Schools — Practice PHP Coding Problems — Leap Year — https://www.w3schools.com/php/exercise.asp
