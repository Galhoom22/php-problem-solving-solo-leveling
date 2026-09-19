# Gate 059 — JSON Decode Sum Scores

Status: Not cleared
Related skill: Pattern-02-hash-map-lookup
Difficulty: Easy
Gate Rank: D
Min Hunter Rank: D-Rank
XP Reward: 40
Source Platform: w3resource
w3resource section: PHP JSON
Pattern tag: JSON

## System Brief
w3resource-style JSON drill: given a JSON string like `{"scores":[1,2,3]}`, decode and return the sum of `scores`. Invalid/missing → `0`.

Example: `'{"scores":[10,5]}'` → `15`.

## What This Gate Is Testing
json_decode + validate shape + sum.

## Learn First (System Tutorial)
- json_decode assoc true
- Guard missing keys

## Backend Link (Why this matters at work)
### Direct
- Ingesting webhook/API bodies.
### Indirect
- Defensive decoding.
### Job takeaway
- "Never trust JSON shape blindly."

## Clear Rule
Mark ✅ in `02-Problems/README.md` (Side Quest section if applicable) after a clean clear.

## Source
Source: w3resource — PHP JSON — JSON Decode Sum Scores — https://www.w3resource.com/php-exercises/php-json-exercises.php
Hub: https://www.w3resource.com/php-exercises/
