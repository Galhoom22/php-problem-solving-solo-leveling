# Gate 176 🔥 — Task Scheduler

Status: Not cleared
Related skill: Pattern-15-heap-topk
Difficulty: Medium
Gate Rank: B
Min Hunter Rank: B-Rank
XP Reward: 90
Source Platform: LeetCode
Pattern tag: NeetCode PHP+Backend

## System Brief
CPU tasks labeled `A…Z`. Same letter needs at least `n` cooldown between runs. Return the minimum intervals to finish all tasks (idle time allowed).

Example: `tasks = ["A","A","A","B","B","B"]`, `n = 2` → `8`.

## What This Gate Is Testing
Frequency counting + greedy/heap scheduling with cooldown.

## Learn First (System Tutorial)
- Most frequent task dominates the frame length
- Formula or simulation both OK if you can explain

## Backend Link (Why this matters at work)
### Direct
- Job queues with per-tenant rate limits, worker cooldowns, email blast throttling.
### Indirect
- Schedule under spacing constraints.
### Job takeaway
- "Cooldown limits turn into cooldown scheduling."

## Clear Rule
Mark ✅ in `02-Problems/README.md` and update the Status Window only after you can explain and clear it cleanly.

## Source
Source: LeetCode — Task Scheduler — https://leetcode.com/problems/task-scheduler/ (also NeetCode Heap / Greedy)