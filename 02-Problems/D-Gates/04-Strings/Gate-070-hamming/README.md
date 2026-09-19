# Gate 070 — Hamming Distance

Status: Not cleared
Related skill: Pattern-10-two-pointers
Difficulty: Easy
Gate Rank: D
Min Hunter Rank: D-Rank
XP Reward: 40
Source Platform: Exercism
Exercism slug: `hamming`
Pattern tag: Strings

## System Brief
Exercism-style: count differing positions between two DNA strands of **equal length**. If lengths differ, throw `InvalidArgumentException` (or return -1 — prefer exception for clarity).

Example: `"GAGCCTACTAACGGGAT"` vs `"CATCGTAATGACGGCCT"` → `7`.

## What This Gate Is Testing
Zip characters; count mismatches.

## Learn First (System Tutorial)
- Guard length
- Index walk

## Backend Link (Why this matters at work)
### Direct
- Diff checks, checksum compares.
### Indirect
- Pairwise scans.
### Job takeaway
- "Equal-length compare is a zip."

## Clear Rule
Mark ✅ in `02-Problems/README.md` after a clean clear + explain aloud.

## Source
Source: Exercism — PHP track — Hamming Distance — https://exercism.org/tracks/php/exercises/hamming
Track hub: https://exercism.org/tracks/php
