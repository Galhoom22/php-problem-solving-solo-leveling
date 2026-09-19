# 11 — Core Climb Curriculum (20/80) — PHP-Fit Only

> AI load this for the starter required problem list by pattern (ordered easy → hard).
> This list is practice material inside the Learn + Solve system — not a solutions dump.
> **Every item must pass `19-php-fitness-filter.md`.**

## 9. Proposed Problem Curriculum (Core Climb Path — 20/80)

This is the **starter required climb**, not the full archive.
Use it after (or beside) Skill Books so beginners learn the idea first, then fight the Gate.

Bias rules (in order):
1. **PHP-natural** structures and idioms (arrays, maps, strings, nested data)
2. **Backend-relevant** thinking for PHP work
3. **FAANG-transferable patterns** only when they still feel PHP-fit
4. Multi-platform sources are welcome **after** the PHP Fitness Test

See `17-faang-prep-and-language-transfer.md`, `18-backend-career-links.md`, `19-php-fitness-filter.md`.

Order inside each pattern: **easier → harder**. Do not reshuffle casually.

---

### Arrays, Strings & Hashing (PHP core)
- Two Sum
- Valid Anagram
- Contains Duplicate
- Group Anagrams
- Top K Frequent Elements
- Product of Array Except Self
- Longest Consecutive Sequence
- (optional PHP-flavor) string validation / parse warmups from Exercism or Codewars

> Removed from required: Encode/Decode Strings (awkward specialty; weak PHP-day-job feel).

### Two Pointers (on PHP arrays/strings)
- Valid Palindrome
- Two Sum II
- 3Sum
- Container With Most Water

### Sliding Window (arrays/strings — rate-limit / stream intuition)
- Best Time to Buy and Sell Stock
- Longest Substring Without Repeating Characters
- Longest Repeating Character Replacement
- Minimum Window Substring *(keep only if taught with PHP string/array idioms + Backend Link)*

### Stack & Queue (PHP arrays / SplQueue)
- Valid Parentheses
- Min Stack *(implement with arrays)*
- Daily Temperatures
- Evaluate Reverse Polish Notation
- (optional) simple queue processing kata — job worker intuition

### Binary Search (sorted arrays / versions)
- Binary Search
- Search a 2D Matrix
- Find Minimum in Rotated Sorted Array
- Time Based Key-Value Store *(great PHP map + search hybrid)*

### Cache / Design (PHP-backend direct)
- LRU Cache *(required — implement with PHP arrays/`Spl`; this is career gold)*
- (optional) tiny in-memory TTL cache design side Gate

> **Removed from required climb: classic Linked List chain**
> (Reverse Linked List, Merge Two Lists, Linked List Cycle, Remove Nth Node…)
> Reason: PHP product code almost never hand-builds linked lists; it breaks the “this is about PHP” feeling.
> Optional only as labeled Side Quest — Interview Theater.

### Trees as nested PHP structures
Prefer teaching trees as **nested arrays/objects** (JSON-like), not only LeetCode `TreeNode` theater.
- Maximum Depth
- Invert / mirror structure
- Same Tree / same nested structure
- Level Order (BFS)
- Validate BST *(ok if framed carefully)*
- Lowest Common Ancestor *(optional B-Gate; keep only with clear explanation)*

Also encourage PHP-native tree Gates:
- category tree walk
- nested comment depth
- menu flatten/unflatten

### Heap / Priority Queue (`SplPriorityQueue`)
- Kth Largest Element
- Top-K / frequency heap variants
- Last Stone Weight *(optional)*
- (prefer) “top K slow endpoints” backend-shaped Gate

> Find Median from Data Stream — demote to optional A-side (less common PHP day-job).

### Light Backtracking (generate/search with PHP arrays)
- Subsets
- Permutations
- Combination Sum
- Word Search *(optional; keep if it still feels like grid search training, not alien)*

### Graphs (simple only — adjacency lists in PHP arrays)
- Number of Islands *(grid BFS/DFS — ok)*
- Course Schedule *(topo — good backend dependency story)*
- Clone Graph *(optional)*

> **Removed from required:** Pacific Atlantic Water Flow and other heavy contest-graph packs.

### DP / Memoization intro (caching mindset)
- Climbing Stairs
- House Robber
- Coin Change *(optional B/A)*

> **Removed/demoted from required:** Longest Increasing Subsequence, Word Break as core early prestige — too “contest DSA”, weak PHP identity unless reframed as memoized parsing later.

### Intervals & Greedy (PHP backend gold)
- Merge Intervals
- Meeting Rooms / booking conflict style
- Non-overlapping intervals / schedule selection

---

## Explicitly NOT in required climb
- Linked-list pointer drills
- Segment trees / Fenwick / heavy CP structures
- Bitmask olympiad packs
- Pure math CF/Euler cores
- Union-Find as a required Part
- Any Gate that fails the PHP Fitness Test in `19`

---

## Side Quest lane vs Interview Armor

- **Side-Quests/** = optional extras (not required).
- **04-Interview-Armor/** = **required for Big Tech / FAANG graduation** after B-Rank+ PHP-fit core.
  Includes linked-list classics and language transfer — honestly labeled as interview preparation.
  See `20-big-tech-faang-graduation.md`.

---

> Start with Gates at your Hunter Rank, then one stretch Gate only after the Association checklist is green.
> When importing into PHP-fit core: PHP Fitness Test → insertion-sort → Backend Link → PHP idiom teaching.
> When building graduation Armor: follow `20` (interview-shaped Gates allowed only there, late).
