# Track 2 — Gates (Problems Bank)

> Learn + Solve. Every folder is a **Gate**. Enter only Gates at or below your Hunter Rank.

**Spoiler rule:** no finished solutions ship by default. You create `solution-1.php`.

### At a glance

| | |
|:---|:---|
| **Bank size** | 224 Gate stubs (climb + Side Quests + Interview Armor) |
| **Order law** | Gate IDs ascend with difficulty: **E → D → C → B → A → S → Side → Armor** |
| **Start** | [`01-E-Gates/`](01-E-Gates/) — lowest IDs first |
| **Layout** | `Rank-folder / Pattern-category / Gate-NNN-kebab/` |
| **Optional** | [`07-Side-Quests/`](07-Side-Quests/) — not graduation-critical |
| **Armor** | Linked lists / TreeNode → [`../04-Interview-Armor/`](../04-Interview-Armor/) (after S on the ID ladder) |

**How to clear one Gate:** open its `README.md` → **Brief → Brute → Tighten → Talk** (see root [Clear method](../README.md#clear-method-interview-mirror)) → fill `solution-1.php` → mark ✅ below → update root Status Window.  

**Folder name:** `Gate-NNN-kebab-case/` under `Rank/Category/` (example: `02-D-Gates/05-Arrays-Hashing/Gate-080-contains-duplicate/`).

**Category order:** within each rank, numbered folders ascend by skill load (easy drills → core patterns). Gate IDs follow that walk.

---

## Gate ranks

| Folder | Min Hunter Rank | Intent | ID range |
|:---|:---|:---|:---|
| [`01-E-Gates/`](01-E-Gates/) | E | Survive — PHP confidence | 001–049 |
| [`02-D-Gates/`](02-D-Gates/) | D | Core Easy | 050–094 |
| [`03-C-Gates/`](03-C-Gates/) | C | Easy → early Medium | 095–132 |
| [`04-B-Gates/`](04-B-Gates/) | B | Main Medium set | 133–166 |
| [`05-A-Gates/`](05-A-Gates/) | A | Stretch | 167–183 |
| [`06-S-Gates/`](06-S-Gates/) | S | Prestige (PHP-fit only) | 184–186 |
| [`07-Side-Quests/`](07-Side-Quests/) | any | Optional — not graduation-critical | 187–207 |
| [`../04-Interview-Armor/`](../04-Interview-Armor/) | B+ | Interview lists/trees | 208–224 |

## Gate Source Map (progression order)

> **Dedup rule:** one problem idea → one climb Gate. Dual platform Sources are OK.  
> Related-but-distinct Gates stay separate and link each other (`## Related Gates`).  
> Interview-form twins live in `04-Interview-Armor/` (not a second core Gate).  
> **IDs are sequential by rank** — not by import wave.

### 01-E-Gates (49)

| Gate | Title | Category | Platform | XP | Status |
|:---|:---|:---|:---|:---:|:---:|
| 001 | Sum of Two Numbers | `01-Numbers` | Edabit | 25 | ☐ |
| 002 | Next Number | `01-Numbers` | Edabit | 25 | ☐ |
| 003 | Minutes to Seconds | `01-Numbers` | Edabit | 25 | ☐ |
| 004 | Hours to Seconds | `01-Numbers` | Edabit | 25 | ☐ |
| 005 | Remainder of Two Numbers | `01-Numbers` | Edabit | 25 | ☐ |
| 006 | Divisible by Five | `01-Numbers` | Edabit | 25 | ☐ |
| 007 | Multiple of 100 | `01-Numbers` | Edabit | 25 | ☐ |
| 008 | Less Than or Equal to Zero | `01-Numbers` | Edabit | 25 | ☐ |
| 009 | Celsius to Fahrenheit | `01-Numbers` | W3Schools | 25 | ☐ |
| 010 | Area of a Triangle | `01-Numbers` | Edabit | 25 | ☐ |
| 011 | Maximum Triangle Edge | `01-Numbers` | Edabit | 25 | ☐ |
| 012 | Rectangle Perimeter | `01-Numbers` | Edabit | 25 | ☐ |
| 013 | Age to Days | `01-Numbers` | Edabit | 25 | ☐ |
| 014 | The Farm Problem | `01-Numbers` | Edabit | 25 | ☐ |
| 015 | Absolute Difference | `01-Numbers` | w3resource | 25 | ☐ |
| 016 | Sum 1 to N | `01-Numbers` | W3Schools | 25 | ☐ |
| 017 | Factorial | `01-Numbers` | W3Schools | 25 | ☐ |
| 018 | Difference of Squares | `01-Numbers` | Exercism | 25 | ☐ |
| 019 | Even or Odd | `02-Control-Flow` | W3Schools | 25 | ☐ |
| 020 | FizzBuzz | `02-Control-Flow` | W3Schools | 25 | ☐ |
| 021 | Keep Up the Hoop | `02-Control-Flow` | Codewars | 25 | ☐ |
| 022 | Multiplication Table for Number | `02-Control-Flow` | Codewars | 25 | ☐ |
| 023 | Grade Decision | `02-Control-Flow` | HackerRank | 25 | ☐ |
| 024 | Sum With a Loop | `02-Control-Flow` | HackerRank | 25 | ☐ |
| 025 | Factorial Table Lines | `02-Control-Flow` | w3resource | 25 | ☐ |
| 026 | Reverse String | `03-Strings` | LeetCode | 25 | ☐ |
| 027 | Count Vowels | `03-Strings` | Original | 25 | ☐ |
| 028 | Word Counter | `03-Strings` | W3Schools | 25 | ☐ |
| 029 | First and Last Character | `03-Strings` | W3Schools | 25 | ☐ |
| 030 | Return Something to Me | `03-Strings` | Edabit | 25 | ☐ |
| 031 | Is the String Empty | `03-Strings` | Edabit | 25 | ☐ |
| 032 | Concatenate Name | `03-Strings` | Edabit | 25 | ☐ |
| 033 | Convert a String to an Array | `03-Strings` | Codewars | 25 | ☐ |
| 034 | Remove String Spaces | `03-Strings` | Codewars | 25 | ☐ |
| 035 | String Concat Parts | `03-Strings` | HackerRank | 25 | ☐ |
| 036 | Length and Uppercase | `03-Strings` | HackerRank | 25 | ☐ |
| 037 | String Stats | `03-Strings` | w3resource | 25 | ☐ |
| 038 | Two Fer | `03-Strings` | Exercism | 25 | ☐ |
| 039 | Sum Array Elements | `04-PHP-Arrays-Basics` | Original | 25 | ☐ |
| 040 | Find Max and Min | `04-PHP-Arrays-Basics` | Original | 25 | ☐ |
| 041 | Average Score | `04-PHP-Arrays-Basics` | W3Schools | 25 | ☐ |
| 042 | Count Matches | `04-PHP-Arrays-Basics` | W3Schools | 25 | ☐ |
| 043 | First Array Element | `04-PHP-Arrays-Basics` | Edabit | 25 | ☐ |
| 044 | Reverse an Array | `04-PHP-Arrays-Basics` | Edabit | 25 | ☐ |
| 045 | Associative Value Sum | `04-PHP-Arrays-Basics` | HackerRank | 25 | ☐ |
| 046 | 2D Matrix Sum | `04-PHP-Arrays-Basics` | HackerRank | 25 | ☐ |
| 047 | Array Values Product | `04-PHP-Arrays-Basics` | w3resource | 25 | ☐ |
| 048 | Unique Then Sort | `04-PHP-Arrays-Basics` | w3resource | 25 | ☐ |
| 049 | Resistor Color | `04-PHP-Arrays-Basics` | Exercism | 25 | ☐ |

### 02-D-Gates (45)

| Gate | Title | Category | Platform | XP | Status |
|:---|:---|:---|:---|:---:|:---:|
| 050 | Leap Year | `01-Numbers` | W3Schools | 40 | ☐ |
| 051 | Prime Check | `01-Numbers` | W3Schools | 40 | ☐ |
| 052 | Breaking Chocolate Problem | `01-Numbers` | Codewars | 40 | ☐ |
| 053 | Descending Order | `01-Numbers` | Codewars | 40 | ☐ |
| 054 | Square Every Digit | `01-Numbers` | Codewars | 40 | ☐ |
| 055 | Palindrome Number | `01-Numbers` | LeetCode | 40 | ☐ |
| 056 | Reverse Integer | `01-Numbers` | LeetCode | 40 | ☐ |
| 057 | Plus One | `01-Numbers` | LeetCode | 40 | ☐ |
| 058 | JSON Encode User Map | `02-JSON` | w3resource | 40 | ☐ |
| 059 | JSON Decode Sum Scores | `02-JSON` | w3resource | 40 | ☐ |
| 060 | Format Date Y-m-d | `03-Date` | w3resource | 40 | ☐ |
| 061 | Gigasecond | `03-Date` | Exercism | 40 | ☐ |
| 062 | Valid Palindrome | `04-Strings` | LeetCode | 40 | ☐ |
| 063 | Reverse Words | `04-Strings` | W3Schools | 40 | ☐ |
| 064 | Most Common Character | `04-Strings` | W3Schools | 40 | ☐ |
| 065 | Highest and Lowest | `04-Strings` | Codewars | 40 | ☐ |
| 066 | Disemvowel Trolls | `04-Strings` | Codewars | 40 | ☐ |
| 067 | Digits Only Check | `04-Strings` | w3resource | 40 | ☐ |
| 068 | Raindrops | `04-Strings` | Exercism | 40 | ☐ |
| 069 | Bob | `04-Strings` | Exercism | 40 | ☐ |
| 070 | Hamming Distance | `04-Strings` | Exercism | 40 | ☐ |
| 071 | Isogram | `04-Strings` | Exercism | 40 | ☐ |
| 072 | Pangram | `04-Strings` | Exercism | 40 | ☐ |
| 073 | RNA Transcription | `04-Strings` | Exercism | 40 | ☐ |
| 074 | Acronym | `04-Strings` | Exercism | 40 | ☐ |
| 075 | Isomorphic Strings | `04-Strings` | LeetCode | 40 | ☐ |
| 076 | Ransom Note | `04-Strings` | LeetCode | 40 | ☐ |
| 077 | Is Subsequence | `04-Strings` | LeetCode | 40 | ☐ |
| 078 | Two Sum | `05-Arrays-Hashing` | LeetCode | 40 | ☐ |
| 079 | Valid Anagram | `05-Arrays-Hashing` | LeetCode | 40 | ☐ |
| 080 | Contains Duplicate | `05-Arrays-Hashing` | LeetCode | 40 | ☐ |
| 081 | Move Zeros to End | `05-Arrays-Hashing` | W3Schools | 40 | ☐ |
| 082 | Letter Frequency | `05-Arrays-Hashing` | W3Schools | 40 | ☐ |
| 083 | Second Largest | `05-Arrays-Hashing` | W3Schools | 40 | ☐ |
| 084 | Running Sum | `05-Arrays-Hashing` | W3Schools | 40 | ☐ |
| 085 | Two Oldest Ages | `05-Arrays-Hashing` | Codewars | 40 | ☐ |
| 086 | Small Enough | `05-Arrays-Hashing` | Codewars | 40 | ☐ |
| 087 | Lost Number in Sequence | `05-Arrays-Hashing` | Codewars | 40 | ☐ |
| 088 | Scrabble Score | `05-Arrays-Hashing` | Exercism | 40 | ☐ |
| 089 | High Scores | `05-Arrays-Hashing` | Exercism | 40 | ☐ |
| 090 | Majority Element | `05-Arrays-Hashing` | LeetCode | 40 | ☐ |
| 091 | Single Number | `05-Arrays-Hashing` | LeetCode | 40 | ☐ |
| 092 | Happy Number | `05-Arrays-Hashing` | LeetCode | 40 | ☐ |
| 093 | Contains Duplicate II | `05-Arrays-Hashing` | LeetCode | 40 | ☐ |
| 094 | Find Pivot Index | `05-Arrays-Hashing` | LeetCode | 40 | ☐ |

### 03-C-Gates (38)

| Gate | Title | Category | Platform | XP | Status |
|:---|:---|:---|:---|:---:|:---:|
| 095 | Word Frequency | `01-Strings` | W3Schools | 60 | ☐ |
| 096 | Stop Spinning My Words | `01-Strings` | Codewars | 60 | ☐ |
| 097 | Create Phone Number | `01-Strings` | Codewars | 60 | ☐ |
| 098 | Who Likes It | `01-Strings` | Codewars | 60 | ☐ |
| 099 | Zigzag Conversion | `01-Strings` | LeetCode | 60 | ☐ |
| 100 | Remove Duplicates Keep Order | `02-Arrays` | W3Schools | 60 | ☐ |
| 101 | Rotate Left | `02-Arrays` | W3Schools | 60 | ☐ |
| 102 | Merge Sorted Lists | `02-Arrays` | W3Schools | 60 | ☐ |
| 103 | Longest Streak | `02-Arrays` | W3Schools | 60 | ☐ |
| 104 | Maximum Subarray Sum | `02-Arrays` | W3Schools | 60 | ☐ |
| 105 | Equal Sides Of An Array | `02-Arrays` | Codewars | 60 | ☐ |
| 106 | Array Diff | `02-Arrays` | Codewars | 60 | ☐ |
| 107 | Bit Counting | `02-Arrays` | Codewars | 60 | ☐ |
| 108 | Pair Closest to Zero Sum | `02-Arrays` | w3resource | 60 | ☐ |
| 109 | Product of Array Except Self | `02-Arrays` | LeetCode | 60 | ☐ |
| 110 | Rotate Array | `02-Arrays` | LeetCode | 60 | ☐ |
| 111 | Partition Labels | `02-Arrays` | LeetCode | 60 | ☐ |
| 112 | Counting Bits | `02-Arrays` | LeetCode | 60 | ☐ |
| 113 | Merge Sorted Array | `02-Arrays` | LeetCode | 60 | ☐ |
| 114 | Flatten Array | `03-Nested-Arrays` | Exercism | 60 | ☐ |
| 115 | Valid Parentheses | `04-Stack` | LeetCode | 60 | ☐ |
| 116 | Daily Temperatures | `04-Stack` | LeetCode | 60 | ☐ |
| 117 | Decode String | `04-Stack` | LeetCode | 60 | ☐ |
| 118 | Group Anagrams | `05-Hashing` | LeetCode | 60 | ☐ |
| 119 | Longest Consecutive Sequence | `05-Hashing` | LeetCode | 60 | ☐ |
| 120 | Subarray Sum Equals K | `05-Hashing` | LeetCode | 60 | ☐ |
| 121 | Container With Most Water | `06-Two-Pointers` | LeetCode | 60 | ☐ |
| 122 | Longest Common Prefix | `06-Two-Pointers` | W3Schools | 60 | ☐ |
| 123 | 3Sum | `06-Two-Pointers` | LeetCode | 60 | ☐ |
| 124 | Sort Colors | `06-Two-Pointers` | LeetCode | 60 | ☐ |
| 125 | Squares of a Sorted Array | `06-Two-Pointers` | LeetCode | 60 | ☐ |
| 126 | Two Sum II - Input Array Is Sorted | `06-Two-Pointers` | LeetCode | 60 | ☐ |
| 127 | Best Time to Buy and Sell Stock | `07-Sliding-Window` | LeetCode | 60 | ☐ |
| 128 | Longest Substring Without Repeating Characters | `07-Sliding-Window` | LeetCode | 60 | ☐ |
| 129 | Find All Anagrams in a String | `07-Sliding-Window` | LeetCode | 60 | ☐ |
| 130 | Minimum Size Subarray Sum | `07-Sliding-Window` | LeetCode | 60 | ☐ |
| 131 | Longest Repeating Character Replacement | `07-Sliding-Window` | LeetCode | 60 | ☐ |
| 132 | Maximum Average Subarray I | `07-Sliding-Window` | LeetCode | 60 | ☐ |

### 04-B-Gates (34)

| Gate | Title | Category | Platform | XP | Status |
|:---|:---|:---|:---|:---:|:---:|
| 133 | Binary Search | `01-Binary-Search` | LeetCode | 90 | ☐ |
| 134 | Search Insert Position | `01-Binary-Search` | LeetCode | 90 | ☐ |
| 135 | Search a 2D Matrix | `01-Binary-Search` | LeetCode | 90 | ☐ |
| 136 | Search in Rotated Sorted Array | `01-Binary-Search` | LeetCode | 90 | ☐ |
| 137 | Find Minimum in Rotated Sorted Array | `01-Binary-Search` | LeetCode | 90 | ☐ |
| 138 | Find First and Last Position of Element in Sorted Array | `01-Binary-Search` | LeetCode | 90 | ☐ |
| 139 | Find Peak Element | `01-Binary-Search` | LeetCode | 90 | ☐ |
| 140 | Search a 2D Matrix II | `01-Binary-Search` | LeetCode | 90 | ☐ |
| 141 | Koko Eating Bananas | `01-Binary-Search` | LeetCode | 90 | ☐ |
| 142 | Next Permutation | `02-Arrays-Medium` | LeetCode | 90 | ☐ |
| 143 | Find the Duplicate Number | `03-Hashing-Medium` | LeetCode | 90 | ☐ |
| 144 | Valid Sudoku | `03-Hashing-Medium` | LeetCode | 90 | ☐ |
| 145 | Top K Frequent Elements | `04-Heap-TopK` | LeetCode | 90 | ☐ |
| 146 | Kth Largest Element in an Array | `04-Heap-TopK` | LeetCode | 90 | ☐ |
| 147 | Merge Intervals | `05-Intervals` | LeetCode | 90 | ☐ |
| 148 | Insert Interval | `05-Intervals` | LeetCode | 90 | ☐ |
| 149 | Non-overlapping Intervals | `05-Intervals` | LeetCode | 90 | ☐ |
| 150 | Min Stack | `06-Stack-Design` | LeetCode | 90 | ☐ |
| 151 | Simplify Path | `06-Stack-Design` | LeetCode | 90 | ☐ |
| 152 | Evaluate Reverse Polish Notation | `06-Stack-Design` | LeetCode | 90 | ☐ |
| 153 | LRU Cache | `07-Cache-Design` | LeetCode | 90 | ☐ |
| 154 | Insert Delete GetRandom O(1) | `07-Cache-Design` | LeetCode | 90 | ☐ |
| 155 | Maximum Depth (Nested Structure) | `08-Nested-Trees` | LeetCode | 90 | ☐ |
| 156 | Implement Trie (Prefix Tree) | `09-Trie-Design` | LeetCode | 90 | ☐ |
| 157 | Jump Game | `10-Greedy` | LeetCode | 90 | ☐ |
| 158 | Jump Game II | `10-Greedy` | LeetCode | 90 | ☐ |
| 159 | Rotate Image | `11-Matrix` | LeetCode | 90 | ☐ |
| 160 | Set Matrix Zeroes | `11-Matrix` | LeetCode | 90 | ☐ |
| 161 | Spiral Matrix | `11-Matrix` | LeetCode | 90 | ☐ |
| 162 | Subsets | `12-Backtracking` | LeetCode | 90 | ☐ |
| 163 | Permutations | `12-Backtracking` | LeetCode | 90 | ☐ |
| 164 | Combination Sum | `12-Backtracking` | LeetCode | 90 | ☐ |
| 165 | Generate Parentheses | `12-Backtracking` | LeetCode | 90 | ☐ |
| 166 | Letter Combinations of a Phone Number | `12-Backtracking` | LeetCode | 90 | ☐ |

### 05-A-Gates (17)

| Gate | Title | Category | Platform | XP | Status |
|:---|:---|:---|:---|:---:|:---:|
| 167 | Number of Islands | `01-Graphs` | LeetCode | 130 | ☐ |
| 168 | Course Schedule | `01-Graphs` | LeetCode | 130 | ☐ |
| 169 | Number of Provinces | `01-Graphs` | LeetCode | 130 | ☐ |
| 170 | Rotting Oranges | `01-Graphs` | LeetCode | 130 | ☐ |
| 171 | Climbing Stairs | `02-DP-Intro` | LeetCode | 130 | ☐ |
| 172 | House Robber | `02-DP-Intro` | LeetCode | 130 | ☐ |
| 173 | Coin Change | `02-DP-Intro` | LeetCode | 130 | ☐ |
| 174 | Unique Paths | `02-DP-Intro` | LeetCode | 130 | ☐ |
| 175 | Minimum Path Sum | `02-DP-Intro` | LeetCode | 130 | ☐ |
| 176 | Maximum Product Subarray | `02-DP-Intro` | LeetCode | 130 | ☐ |
| 177 | Word Break | `02-DP-Intro` | LeetCode | 130 | ☐ |
| 178 | Longest Increasing Subsequence | `02-DP-Intro` | LeetCode | 130 | ☐ |
| 179 | Longest Common Subsequence | `02-DP-Intro` | LeetCode | 130 | ☐ |
| 180 | Partition Equal Subset Sum | `02-DP-Intro` | LeetCode | 130 | ☐ |
| 181 | Coin Change II | `02-DP-Intro` | LeetCode | 130 | ☐ |
| 182 | Trapping Rain Water | `02-DP-Intro` | LeetCode | 130 | ☐ |
| 183 | Word Search | `03-Backtracking-Harder` | LeetCode | 130 | ☐ |

### 06-S-Gates (3)

| Gate | Title | Category | Platform | XP | Status |
|:---|:---|:---|:---|:---:|:---:|
| 184 | Minimum Window Substring | `01-Hard-PHP-Fit` | LeetCode | 200 | ☐ |
| 185 | Edit Distance | `01-Hard-PHP-Fit` | LeetCode | 200 | ☐ |
| 186 | Sliding Window Maximum | `01-Hard-PHP-Fit` | LeetCode | 200 | ☐ |

### 07-Side-Quests (21)

| Gate | Title | Folder | Platform | XP | Status |
|:---|:---|:---|:---|:---:|:---:|
| 187 | First and Last Digit | `01-CodeChef` | CodeChef | 25 | ☐ |
| 188 | Sum of Digits | `01-CodeChef` | CodeChef | 25 | ☐ |
| 189 | Reverse The Number | `01-CodeChef` | CodeChef | 25 | ☐ |
| 190 | Lucky Four | `01-CodeChef` | CodeChef | 25 | ☐ |
| 191 | Chef and Operators | `01-CodeChef` | CodeChef | 25 | ☐ |
| 192 | Second Largest of Three | `01-CodeChef` | CodeChef | 40 | ☐ |
| 193 | ATM Withdrawal | `01-CodeChef` | CodeChef | 40 | ☐ |
| 194 | Watermelon | `02-Codeforces` | Codeforces | 25 | ☐ |
| 195 | Way Too Long Words | `02-Codeforces` | Codeforces | 25 | ☐ |
| 196 | Team | `02-Codeforces` | Codeforces | 25 | ☐ |
| 197 | Bit++ | `02-Codeforces` | Codeforces | 25 | ☐ |
| 198 | Domino piling | `02-Codeforces` | Codeforces | 25 | ☐ |
| 199 | Next Round | `02-Codeforces` | Codeforces | 25 | ☐ |
| 200 | Beautiful Matrix | `02-Codeforces` | Codeforces | 25 | ☐ |
| 201 | Helpful Maths | `02-Codeforces` | Codeforces | 25 | ☐ |
| 202 | Stones on the Table | `02-Codeforces` | Codeforces | 25 | ☐ |
| 203 | Bear and Big Brother | `02-Codeforces` | Codeforces | 25 | ☐ |
| 204 | Wrong Subtraction | `02-Codeforces` | Codeforces | 25 | ☐ |
| 205 | Kefa and First Steps | `02-Codeforces` | Codeforces | 40 | ☐ |
| 206 | Selection Sort Steps | `03-W3Resource-Extras` | w3resource | 40 | ☐ |
| 207 | Bubble Sort Swap Count | `04-W3Schools-Extras` | W3Schools | 40 | ☐ |

### Interview Armor (17)

> Sealed until **B-Rank+** on the PHP-fit climb. IDs follow Side Quests on the global ladder.

| Gate | Title | Part | Platform | XP | Status |
|:---|:---|:---|:---|:---:|:---:|
| 208 | Reverse Linked List | `Part-1-Linked-Lists-Interview` | LeetCode | 90 | ☐ |
| 209 | Merge Two Sorted Lists | `Part-1-Linked-Lists-Interview` | LeetCode | 90 | ☐ |
| 210 | Linked List Cycle | `Part-1-Linked-Lists-Interview` | LeetCode | 90 | ☐ |
| 211 | Remove Nth Node From End of List | `Part-1-Linked-Lists-Interview` | LeetCode | 90 | ☐ |
| 212 | Linked List Cycle II | `Part-1-Linked-Lists-Interview` | LeetCode | 90 | ☐ |
| 213 | Palindrome Linked List | `Part-1-Linked-Lists-Interview` | LeetCode | 90 | ☐ |
| 214 | Add Two Numbers | `Part-1-Linked-Lists-Interview` | LeetCode | 90 | ☐ |
| 215 | Swap Nodes in Pairs | `Part-1-Linked-Lists-Interview` | LeetCode | 90 | ☐ |
| 216 | Invert Binary Tree | `Part-2-TreeNode-Interview-Form` | LeetCode | 90 | ☐ |
| 217 | Symmetric Tree | `Part-2-TreeNode-Interview-Form` | LeetCode | 90 | ☐ |
| 218 | Validate Binary Search Tree | `Part-2-TreeNode-Interview-Form` | LeetCode | 90 | ☐ |
| 219 | Binary Tree Level Order Traversal | `Part-2-TreeNode-Interview-Form` | LeetCode | 90 | ☐ |
| 220 | Diameter of Binary Tree | `Part-2-TreeNode-Interview-Form` | LeetCode | 90 | ☐ |
| 221 | Kth Smallest Element in a BST | `Part-2-TreeNode-Interview-Form` | LeetCode | 90 | ☐ |
| 222 | Lowest Common Ancestor of a Binary Tree | `Part-2-TreeNode-Interview-Form` | LeetCode | 90 | ☐ |
| 223 | Maximum Depth of Binary Tree | `Part-2-TreeNode-Interview-Form` | LeetCode | 90 | ☐ |
| 224 | Binary Tree Inorder Traversal | `Part-2-TreeNode-Interview-Form` | LeetCode | 90 | ☐ |

## Session cycle

1. Confirm Rank unlock  
2. Read System Brief + Learn First  
3. Attempt alone  
4. Coach only if stuck (`repo-ideas/21-…`)  
5. CHECK → mark ✅ → XP → update Status Window  

## Before Instant Dungeons (Track 3)

Usually needs **B-Rank+** and core E/D/C/B clears in order.
