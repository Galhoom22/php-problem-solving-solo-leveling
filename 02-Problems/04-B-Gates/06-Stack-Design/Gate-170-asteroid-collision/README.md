# Gate 170 — Asteroid Collision

Status: Not cleared
Related skill: Pattern-12-stack-queue
Difficulty: Medium
Gate Rank: B
Min Hunter Rank: B-Rank
XP Reward: 90
Source Platform: LeetCode
Pattern tag: NeetCode PHP-fit

## System Brief
Asteroids on a line: positive = right, negative = left. Same absolute value → both explode; larger absolute value survives. Return the state after all collisions.

Example: `[5,10,-5]` → `[5,10]`.

## What This Gate Is Testing
Stack simulation of opposing directions.

## Learn First (System Tutorial)
- Only opposite directions can collide (right-moving then left-moving)
- Pop while the stack top loses to the incoming asteroid

## Backend Link (Why this matters at work)
### Direct
- Conflict resolution in event streams / undo stacks with cancel rules.
### Indirect
- Stack as “pending state” until resolved.
### Job takeaway
- "Collisions are stack reductions with rules."

## Clear Rule
Mark ✅ in `02-Problems/README.md` and update the Status Window only after you can explain and clear it cleanly.

## Source
Source: LeetCode — Asteroid Collision — https://leetcode.com/problems/asteroid-collision/ (also NeetCode Stack)