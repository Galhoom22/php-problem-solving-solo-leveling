# Gate 099 — Longest Repeating Character Replacement

Status: Not cleared  
Related skill: Pattern-11-sliding-window  
Difficulty: Medium  
Gate Rank: C  
Min Hunter Rank: C-Rank  
XP Reward: 60  
Source Platform: LeetCode  
LeetCode #: 424  
Pattern tag: Sliding Window

## System Brief
LeetCode 424: longest substring you can make of one character using at most `k` replacements.

Example: `s="AABABBA"`, `k=1` → `4`.

## What This Gate Is Testing
Window where (len - maxFreq) <= k.

## Learn First (System Tutorial)
- Track max frequency in window
- Classic replace window

## Backend Link (Why this matters at work)
### Direct
- Fuzzy streak with edit budget.
### Indirect
- Window invariant.
### Job takeaway
- "Replacements = len - maxFreq."

## Clear Rule
Mark ✅ in the track README / Gate map after a clean clear.

## Source
Source: LeetCode — 424. Longest Repeating Character Replacement — https://leetcode.com/problems/longest-repeating-character-replacement/  
Problemset catalog: https://leetcode.com/problemset/
