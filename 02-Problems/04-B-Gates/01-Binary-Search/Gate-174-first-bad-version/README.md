# Gate 174 — First Bad Version

Status: Not cleared
Related skill: Pattern-13-binary-search
Difficulty: Medium
Gate Rank: B
Min Hunter Rank: B-Rank
XP Reward: 90
Source Platform: LeetCode
Pattern tag: NeetCode PHP+Backend

## System Brief
Versions `1…n`; once a version is bad, all later are bad. You may call `isBadVersion(version)`. Return the first bad version with minimal calls.

Example: `n = 5`, first bad = `4` → return `4`.

## What This Gate Is Testing
Binary search for the leftmost bad boundary.

## Learn First (System Tutorial)
- Search the first index where predicate becomes true
- Avoid linear scan when `n` is huge

## Backend Link (Why this matters at work)
### Direct
- Find first failing deploy/build, feature-flag regression, bad migration.
### Indirect
- Binary search on monotonic production signals.
### Job takeaway
- "First bad version is deploy bisect."

## Clear Rule
Mark ✅ in `02-Problems/README.md` and update the Status Window only after you can explain and clear it cleanly.

## Source
Source: LeetCode — First Bad Version — https://leetcode.com/problems/first-bad-version/ (also NeetCode Binary Search)