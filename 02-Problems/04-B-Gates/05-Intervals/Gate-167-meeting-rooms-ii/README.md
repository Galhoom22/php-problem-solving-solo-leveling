# Gate 167 🔥 — Meeting Rooms II

Status: Not cleared
Related skill: Pattern-16-intervals
Difficulty: Medium
Gate Rank: B
Min Hunter Rank: B-Rank
XP Reward: 90
Source Platform: LeetCode
Pattern tag: NeetCode PHP-fit

## System Brief
Given meeting time intervals, return the minimum number of conference rooms required.

Example: `[[0,30],[5,10],[15,20]]` → `2`.

## What This Gate Is Testing
Sweep line / sort starts & ends — peak concurrent meetings.

## Learn First (System Tutorial)
- Sort start times and end times separately (or use a min-heap of end times)
- Track how many rooms are busy as time advances

## Backend Link (Why this matters at work)
### Direct
- Resource pooling: DB connections, workers, interview rooms, lock slots.
### Indirect
- Capacity planning from overlapping intervals.
### Job takeaway
- "Concurrent load is an intervals peak, not a merge."

## Related Gates
- Gate 147 Merge Intervals — merge vs peak concurrency
- Gate 149 Non-overlapping Intervals — remove vs rooms

## Clear Rule
Mark ✅ in `02-Problems/README.md` and update the Status Window only after you can explain and clear it cleanly.

## Source
Source: LeetCode — Meeting Rooms II — https://leetcode.com/problems/meeting-rooms-ii/ (also NeetCode Intervals)