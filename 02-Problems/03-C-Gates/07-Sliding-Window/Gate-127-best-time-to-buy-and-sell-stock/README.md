# Gate 127 — Best Time to Buy and Sell Stock

Status: Not cleared
Related skill: Pattern-11-sliding-window
Difficulty: Easy
Gate Rank: C
Min Hunter Rank: C-Rank
XP Reward: 60
Source Platform: LeetCode

## System Brief
One buy + one sell for max profit (or 0).

Example: `prices = [7,1,5,3,6,4]` → `5` (buy at 1, sell at 6).

## What This Gate Is Testing
Track running minimum while scanning for best profit.

## Learn First (System Tutorial)
- Running min / best difference
- One pass

## Backend Link (Why this matters at work)
### Direct
- Min cost vs later revenue style metrics.
### Indirect
- Stream scans with memory of past state.
### Job takeaway
- "I keep the right running state while I scan."

## Clear Rule
Mark ✅ in `02-Problems/README.md` and update the Status Window only after you can explain and clear it cleanly.

## Source
Source: LeetCode — https://leetcode.com/problems/best-time-to-buy-and-sell-stock/
