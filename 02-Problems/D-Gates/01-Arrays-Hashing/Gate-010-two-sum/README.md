# Gate 010 — Two Sum

Status: Not cleared  
Related skill: Pattern-02-hash-map-lookup  
Difficulty: Easy  
Gate Rank: D  
Min Hunter Rank: D-Rank  
XP Reward: 40  
Source Platform: LeetCode

## System Brief
Given `nums` and `target`, return indices of two numbers that add to `target`.

See official examples on LeetCode (link in Source).

## What This Gate Is Testing
Whether you can replace nested loops with a hash map lookup.

## Learn First (System Tutorial)
- What is a hash map in plain language?
- Tiny PHP example of key → value lookup
- Why nested loops become slow

## Backend Link (Why this matters at work)
### Direct
- Caching `userId → user`, counting events by key.
### Indirect
- Replacing O(n²) scans before endpoints time out.
### Job takeaway
- "Hash maps teach me O(1) lookups instead of scanning lists."

## Practice Task
1. Read the brief (and Source link if external)
2. Attempt alone in PHP 8.5 — fill `solution-1.php`
3. Ask for hints only if stuck (Hunter Solves First)

## Files
- `solution-1.php` — **hunter-authored** (stub only shipped)
- `solution-2.php` — optional improved clear (you create)
- `notes.md` — optional interview-style explanation (you create)

## Clear Rule
Mark ✅ in `02-Problems/README.md` and update the Status Window only after you can explain and clear it cleanly.

## Source
Source: LeetCode — https://leetcode.com/problems/two-sum/
