# Gate 171 🔥 — Moving Average from Data Stream

Status: Not cleared
Related skill: Pattern-11-sliding-window
Difficulty: Medium
Gate Rank: B
Min Hunter Rank: B-Rank
XP Reward: 90
Source Platform: LeetCode
Pattern tag: NeetCode PHP+Backend

## System Brief
Given a window size `size`, design a class that accepts a stream of integers and returns the moving average of the last `size` values.

Example: `size = 3` — `next(1)` → `1.0`; `next(10)` → `5.5`; `next(3)` → `4.666…`; `next(5)` → `6.0`.

## What This Gate Is Testing
Queue / sliding window sum over a live stream.

## Learn First (System Tutorial)
- Keep a queue of at most `size` values and a running sum
- When full, dequeue the oldest before enqueueing the newest

## Backend Link (Why this matters at work)
### Direct
- API latency averages, error-rate windows, “last N minutes” dashboards.
### Indirect
- Streaming metrics without storing the whole history.
### Job takeaway
- "Moving average is a fixed window over a stream."

## Clear Rule
Mark ✅ in `02-Problems/README.md` and update the Status Window only after you can explain and clear it cleanly.

## Source
Source: LeetCode — Moving Average from Data Stream — https://leetcode.com/problems/moving-average-from-data-stream/ (also NeetCode / Blind-style streams)