# Gate 093 — Format Date Y-m-d

Status: Not cleared
Related skill: Pattern-04-big-o-plain-talk
Difficulty: Easy
Gate Rank: D
Min Hunter Rank: D-Rank
XP Reward: 40
Source Platform: w3resource
w3resource section: PHP Date
Pattern tag: Date

## System Brief
w3resource-style date drill: given year, month, day as ints, return `Y-m-d` zero-padded (e.g. `2026-09-19`). Use `sprintf` or `DateTimeImmutable` — document choice in notes.

Example: `(2026, 9, 19)` → `"2026-09-19"`.

## What This Gate Is Testing
Zero-pad month/day.

## Learn First (System Tutorial)
- DateTimeImmutable preferred in modern PHP
- Padding with %02d

## Backend Link (Why this matters at work)
### Direct
- API dates, DB date keys, reports.
### Indirect
- Canonical date strings.
### Job takeaway
- "Y-m-d is the safe exchange format."

## Clear Rule
Mark ✅ in `02-Problems/README.md` (Side Quest section if applicable) after a clean clear.

## Source
Source: w3resource — PHP Date — Format Date Y-m-d — https://www.w3resource.com/php-exercises/php-date-exercises.php
Hub: https://www.w3resource.com/php-exercises/
