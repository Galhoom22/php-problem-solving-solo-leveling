# Gate 178 — My Calendar I

Status: Not cleared
Related skill: Pattern-16-intervals
Difficulty: Medium
Gate Rank: B
Min Hunter Rank: B-Rank
XP Reward: 90
Source Platform: LeetCode
Pattern tag: NeetCode PHP+Backend

## System Brief
Implement `MyCalendar` with `book(start, end)` — half-open `[start, end)`. Return `true` and store if it does not overlap an existing booking; else `false`.

Example: `book(10,20)` → true; `book(15,25)` → false; `book(20,30)` → true.

## What This Gate Is Testing
Interval overlap checks (list or sorted structure).

## Learn First (System Tutorial)
- Overlap if start < otherEnd AND end > otherStart
- Half-open intervals touch at endpoints without overlapping

## Backend Link (Why this matters at work)
### Direct
- Calendar booking APIs, reservation systems, lock windows.
### Indirect
- Conflict detection before insert.
### Job takeaway
- "Booking is overlap rejection on a calendar."

## Clear Rule
Mark ✅ in `02-Problems/README.md` and update the Status Window only after you can explain and clear it cleanly.

## Source
Source: LeetCode — My Calendar I — https://leetcode.com/problems/my-calendar-i/ (also NeetCode Intervals)