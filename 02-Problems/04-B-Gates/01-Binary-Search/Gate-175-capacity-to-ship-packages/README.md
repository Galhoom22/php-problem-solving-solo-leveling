# Gate 175 🔥 — Capacity To Ship Packages Within D Days

Status: Not cleared
Related skill: Pattern-13-binary-search
Difficulty: Medium
Gate Rank: B
Min Hunter Rank: B-Rank
XP Reward: 90
Source Platform: LeetCode
Pattern tag: NeetCode PHP+Backend

## System Brief
Packages with weights must ship in order across at most `days` days. Find the **minimum ship capacity** to finish on time.

Example: `weights = [1,2,3,4,5,6,7,8,9,10]`, `days = 5` → `15`.

## What This Gate Is Testing
Binary search on capacity + greedy feasibility check.

## Learn First (System Tutorial)
- Low = max(weight), high = sum(weights)
- Feasibility: can you ship in ≤ days at capacity mid?

## Backend Link (Why this matters at work)
### Direct
- Batch jobs with capacity limits, CDN/egress budgets, warehouse shipping.
### Indirect
- Minimize resource size subject to an SLA (days).
### Job takeaway
- "Binary search the scarce resource, simulate the schedule."

## Clear Rule
Mark ✅ in `02-Problems/README.md` and update the Status Window only after you can explain and clear it cleanly.

## Source
Source: LeetCode — Capacity To Ship Packages Within D Days — https://leetcode.com/problems/capacity-to-ship-packages-within-d-days/ (also NeetCode Binary Search)