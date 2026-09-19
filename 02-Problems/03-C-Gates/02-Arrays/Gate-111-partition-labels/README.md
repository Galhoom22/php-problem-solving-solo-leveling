# Gate 111 — Partition Labels

Status: Not cleared  
Related skill: Pattern-16-intervals  
Difficulty: Medium  
Gate Rank: C  
Min Hunter Rank: C-Rank  
XP Reward: 60  
Source Platform: LeetCode  
LeetCode #: 763  
Pattern tag: Greedy / Strings

## System Brief
LeetCode 763: partition string so each letter appears in at most one part; return sizes.

Example: `"ababcbacadefegdehijhklij"` → `[9,7,8]`.

## What This Gate Is Testing
Last-index map + greedy expand.

## Learn First (System Tutorial)
- Track last occurrence
- Close part when i == end

## Backend Link (Why this matters at work)
### Direct
- Segmenting logs by key ownership.
### Indirect
- Greedy coverage.
### Job takeaway
- "Last-seen indexes drive partitions."

## Clear Rule
Mark ✅ in the track README / Gate map after a clean clear.

## Source
Source: LeetCode — 763. Partition Labels — https://leetcode.com/problems/partition-labels/  
Catalog inspiration (solutions NOT copied): https://github.com/LeetCode-in-Php/LeetCode-in-Php.github.io · https://leetcode-in-php.github.io/
