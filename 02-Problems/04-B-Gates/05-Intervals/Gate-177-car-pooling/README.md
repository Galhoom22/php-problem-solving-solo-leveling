# Gate 177 — Car Pooling

Status: Not cleared
Related skill: Pattern-16-intervals
Difficulty: Medium
Gate Rank: B
Min Hunter Rank: B-Rank
XP Reward: 90
Source Platform: LeetCode
Pattern tag: NeetCode PHP+Backend

## System Brief
Trips `[numPassengers, from, to]` on a line. Capacity `capacity`. Return whether you can finish all trips without exceeding capacity.

Example: `trips = [[2,1,5],[3,3,7]]`, `capacity = 4` → `false`; capacity `5` → `true`.

## What This Gate Is Testing
Sweep line / diff array on pickup and drop-off.

## Learn First (System Tutorial)
- Treat +passengers at `from`, −passengers at `to`
- Scan timeline and track current load

## Backend Link (Why this matters at work)
### Direct
- Seat pools, concurrent session caps, connection pool overload checks.
### Indirect
- Capacity over overlapping intervals (cousin of Meeting Rooms II).
### Job takeaway
- "Load is a timeline of +/− events."

## Clear Rule
Mark ✅ in `02-Problems/README.md` and update the Status Window only after you can explain and clear it cleanly.

## Source
Source: LeetCode — Car Pooling — https://leetcode.com/problems/car-pooling/ (also NeetCode Intervals / Sweep)