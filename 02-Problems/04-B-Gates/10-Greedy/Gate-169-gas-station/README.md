# Gate 169 — Gas Station

Status: Not cleared
Related skill: Pattern-16-intervals
Difficulty: Medium
Gate Rank: B
Min Hunter Rank: B-Rank
XP Reward: 90
Source Platform: LeetCode
Pattern tag: NeetCode PHP-fit

## System Brief
There are `n` gas stations in a circle. `gas[i]` is fuel at station `i`; `cost[i]` is fuel to go to the next. Return the starting station index if you can complete the circuit once, else `-1`. Unique answer guaranteed when possible.

Example: `gas = [1,2,3,4,5]`, `cost = [3,4,5,1,2]` → `3`.

## What This Gate Is Testing
One-pass greedy: total tank check + reset start when tank goes negative.

## Learn First (System Tutorial)
- If total gas < total cost, impossible
- When running tank drops below 0, next station is the new candidate start

## Backend Link (Why this matters at work)
### Direct
- Circular job/token routes; “can this worker finish the loop?”
### Indirect
- Greedy discard of doomed prefixes.
### Job takeaway
- "If the whole loop is feasible, one smart start exists."

## Related Gates
- Gate 157 Jump Game — greedy reachability cousin

## Clear Rule
Mark ✅ in `02-Problems/README.md` and update the Status Window only after you can explain and clear it cleanly.

## Source
Source: LeetCode — Gas Station — https://leetcode.com/problems/gas-station/ (also NeetCode Greedy)