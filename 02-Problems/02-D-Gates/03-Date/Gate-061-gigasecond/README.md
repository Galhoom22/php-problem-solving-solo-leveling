# Gate 061 📗 — Gigasecond

Status: Not cleared
Related skill: Pattern-04-big-o-plain-talk
Difficulty: Easy
Gate Rank: D
Min Hunter Rank: D-Rank
XP Reward: 40
Source Platform: Exercism
Exercism slug: `gigasecond`
Pattern tag: Date / Time

## System Brief
Exercism-style: given a `DateTimeImmutable`, return a new one exactly `10^9` seconds later.

Example: `2011-04-25` → `2043-01-01` (UTC date focus — follow Exercism tests when comparing).

## What This Gate Is Testing
DateTimeImmutable::modify / add.

## Learn First (System Tutorial)
- Prefer immutable dates
- 1e9 seconds constant

## Backend Link (Why this matters at work)
### Direct
- Expiry timestamps, SLA offsets.
### Indirect
- Time arithmetic safety.
### Job takeaway
- "Prefer DateTimeImmutable for offsets."

## Clear Rule
Mark ✅ in `02-Problems/README.md` after a clean clear + explain aloud.

## Source
Source: Exercism — PHP track — Gigasecond — https://exercism.org/tracks/php/exercises/gigasecond
Track hub: https://exercism.org/tracks/php
