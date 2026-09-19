# Gate 125 — Counting Bits

Status: Not cleared  
Related skill: Pattern-21-memoization-dp-intro  
Difficulty: Easy  
Gate Rank: C  
Min Hunter Rank: C-Rank  
XP Reward: 60  
Source Platform: LeetCode  
LeetCode #: 338  
Pattern tag: Bits / DP (light)

## System Brief
LeetCode 338: for each `i` in `0..n`, return number of 1-bits.

Example: `n=5` → `[0,1,1,2,1,2]`.

Related light bit warm-up: Codewars Bit Counting Gate.

## What This Gate Is Testing
DP: `dp[i] = dp[i>>1] + (i&1)`.

## Learn First (System Tutorial)
- Optional naive popcount first
- Then linear DP

## Backend Link (Why this matters at work)
### Direct
- Flag bitsets (light).
### Indirect
- Bit DP intro.
### Job takeaway
- "Bits can still be tabular."

## Related Gates
- Gate 120 Bit Counting (Codewars) — Hamming weight of **one** integer (warm-up)

## Clear Rule
Mark ✅ in the track README / Gate map after a clean clear.

## Source
Source: LeetCode — 338. Counting Bits — https://leetcode.com/problems/counting-bits/  
Catalog inspiration (solutions NOT copied): https://github.com/LeetCode-in-Php/LeetCode-in-Php.github.io · https://leetcode-in-php.github.io/
