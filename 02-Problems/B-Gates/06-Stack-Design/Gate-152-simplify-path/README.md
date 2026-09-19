# Gate 152 — Simplify Path

Status: Not cleared  
Related skill: Pattern-12-stack-queue  
Difficulty: Medium  
Gate Rank: B  
Min Hunter Rank: B-Rank  
XP Reward: 90  
Source Platform: LeetCode  
LeetCode #: 71  
Pattern tag: Stack / Strings

## System Brief
LeetCode 71: simplify a Unix-style absolute path (`/../`, `//`, `.`).

Example: `"/a/./b/../../c/"` → `"/c"`.

## What This Gate Is Testing
Split on `/`; stack of parts.

## Learn First (System Tutorial)
- PHP path hygiene cousin
- Pop on `..`

## Backend Link (Why this matters at work)
### Direct
- Path normalization — PHP backend gold.
### Indirect
- Stack of segments.
### Job takeaway
- "Simplify path is a segment stack."

## Clear Rule
Mark ✅ in the track README / Gate map after a clean clear.

## Source
Source: LeetCode — 71. Simplify Path — https://leetcode.com/problems/simplify-path/  
Problemset catalog: https://leetcode.com/problemset/
