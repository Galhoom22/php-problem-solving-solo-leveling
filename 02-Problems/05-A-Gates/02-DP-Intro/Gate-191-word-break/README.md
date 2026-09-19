# Gate 191 — Word Break

Status: Not cleared  
Related skill: Pattern-21-memoization-dp-intro  
Difficulty: Medium  
Gate Rank: A  
Min Hunter Rank: A-Rank  
XP Reward: 130  
Source Platform: LeetCode  
LeetCode #: 139  
Pattern tag: DP / Hashing

## System Brief
LeetCode 139: can `s` be segmented into dictionary words?

Example: `s="leetcode"`, `wordDict=["leet","code"]` → true.

## What This Gate Is Testing
dp[i] reachable; try dict cuts.

## Learn First (System Tutorial)
- Set for wordDict
- Backend: tokenizer-ish

## Backend Link (Why this matters at work)
### Direct
- Tokenization / reserved-word splits.
### Indirect
- Boolean DP on prefixes.
### Job takeaway
- "Word break is reachable prefixes."

## Clear Rule
Mark ✅ in the track README / Gate map after a clean clear.

## Source
Source: LeetCode — 139. Word Break — https://leetcode.com/problems/word-break/  
Catalog inspiration (solutions NOT copied): https://github.com/LeetCode-in-Php/LeetCode-in-Php.github.io · https://leetcode-in-php.github.io/
