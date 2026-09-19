# Gate 186 — House Robber II

Status: Not cleared
Related skill: Pattern-21-memoization-dp-intro
Difficulty: Medium-Hard
Gate Rank: A
Min Hunter Rank: A-Rank
XP Reward: 130
Source Platform: LeetCode
Pattern tag: NeetCode PHP-fit

## System Brief
Same as House Robber, but houses are in a **circle** (first and last are adjacent). Return the maximum amount you can rob without robbing two adjacent houses.

Example: `[2,3,2]` → `3`.

## What This Gate Is Testing
Circular DP = max of linear rob on range [0..n-2] vs [1..n-1].

## Learn First (System Tutorial)
- Reuse the linear House Robber helper
- Circle constraint → two ranges, take the better

## Backend Link (Why this matters at work)
### Direct
- Circular schedules / wrap-around constraints in planning.
### Indirect
- Reduce a variant to a solved subproblem.
### Job takeaway
- "Circle = two linear cases."



## Related Gates
- Gate 185 House Robber — linear version (solve first)

## Clear Rule
Mark ✅ in `02-Problems/README.md` and update the Status Window only after you can explain and clear it cleanly.

## Source
Source: LeetCode — House Robber II — https://leetcode.com/problems/house-robber-ii/ (also NeetCode 1-D DP)