# Track 2 — Gates (Problems Bank)

> Learn + Solve. Every folder is a **Gate**. Enter only Gates at or below your Hunter Rank.

**Spoiler rule:** no finished solutions ship by default. You create `solution-1.php`.

### At a glance

| | |
|:---|:---|
| **Bank size** | 224 Gate stubs (climb + Side Quests + Interview Armor) |
| **Order law** | Gate IDs ascend with difficulty: **E → D → C → B → A → S → Side → Armor** |
| **Start** | [`E-Gates/`](E-Gates/) — lowest IDs first |
| **Layout** | `Rank-folder / Pattern-category / Gate-NNN-kebab/` |
| **Optional** | [`Side-Quests/`](Side-Quests/) — not graduation-critical |
| **Armor** | Linked lists / TreeNode → [`../04-Interview-Armor/`](../04-Interview-Armor/) (after S on the ID ladder) |

**How to clear one Gate:** open its `README.md` → fill `solution-1.php` → mark ✅ below → update root Status Window.

---

## Gate ranks

| Folder | Min Hunter Rank | Intent | ID range |
|:---|:---|:---|:---|
| [`E-Gates/`](E-Gates/) | E | Survive — PHP confidence | 001–049 |
| [`D-Gates/`](D-Gates/) | D | Core Easy | 050–094 |
| [`C-Gates/`](C-Gates/) | C | Easy → early Medium | 095–132 |
| [`B-Gates/`](B-Gates/) | B | Main Medium set | 133–166 |
| [`A-Gates/`](A-Gates/) | A | Stretch | 167–183 |
| [`S-Gates/`](S-Gates/) | S | Prestige (PHP-fit only) | 184–186 |
| [`Side-Quests/`](Side-Quests/) | any | Optional — not graduation-critical | 187–207 |
| [`../04-Interview-Armor/`](../04-Interview-Armor/) | B+ | Interview lists/trees | 208–224 |

## Gate Source Map (progression order)

> **Dedup rule:** one problem idea → one climb Gate. Dual platform Sources are OK.  
> Related-but-distinct Gates stay separate and link each other (`## Related Gates`).  
> Interview-form twins live in `04-Interview-Armor/` (not a second core Gate).  
> **IDs are sequential by rank** — not by import wave.

### E-Gates (49)

| Gate | Title | Category | Platform | XP | Status |
|:---|:---|:---|:---|:---:|:---:|
| 001 | Sum Array Elements | `01-PHP-Arrays-Basics` | Original | 25 | ☐ |
| 002 | Find Max and Min | `01-PHP-Arrays-Basics` | Original | 25 | ☐ |
| 003 | Average Score | `01-PHP-Arrays-Basics` | W3Schools | 25 | ☐ |
| 004 | Count Matches | `01-PHP-Arrays-Basics` | W3Schools | 25 | ☐ |
| 005 | First Array Element | `01-PHP-Arrays-Basics` | Edabit | 25 | ☐ |
| 006 | Reverse an Array | `01-PHP-Arrays-Basics` | Edabit | 25 | ☐ |
| 007 | Associative Value Sum | `01-PHP-Arrays-Basics` | HackerRank | 25 | ☐ |
| 008 | 2D Matrix Sum | `01-PHP-Arrays-Basics` | HackerRank | 25 | ☐ |
| 009 | Array Values Product | `01-PHP-Arrays-Basics` | w3resource | 25 | ☐ |
| 010 | Unique Then Sort | `01-PHP-Arrays-Basics` | w3resource | 25 | ☐ |
| 011 | Resistor Color | `01-PHP-Arrays-Basics` | Exercism | 25 | ☐ |
| 012 | Reverse String | `02-Strings` | LeetCode | 25 | ☐ |
| 013 | Count Vowels | `02-Strings` | Original | 25 | ☐ |
| 014 | Word Counter | `02-Strings` | W3Schools | 25 | ☐ |
| 015 | First and Last Character | `02-Strings` | W3Schools | 25 | ☐ |
| 016 | Return Something to Me | `02-Strings` | Edabit | 25 | ☐ |
| 017 | Is the String Empty | `02-Strings` | Edabit | 25 | ☐ |
| 018 | Concatenate Name | `02-Strings` | Edabit | 25 | ☐ |
| 019 | Convert a String to an Array | `02-Strings` | Codewars | 25 | ☐ |
| 020 | Remove String Spaces | `02-Strings` | Codewars | 25 | ☐ |
| 021 | String Concat Parts | `02-Strings` | HackerRank | 25 | ☐ |
| 022 | Length and Uppercase | `02-Strings` | HackerRank | 25 | ☐ |
| 023 | String Stats | `02-Strings` | w3resource | 25 | ☐ |
| 024 | Two Fer | `02-Strings` | Exercism | 25 | ☐ |
| 025 | Even or Odd | `03-Control-Flow` | W3Schools | 25 | ☐ |
| 026 | FizzBuzz | `03-Control-Flow` | W3Schools | 25 | ☐ |
| 027 | Keep Up the Hoop | `03-Control-Flow` | Codewars | 25 | ☐ |
| 028 | Multiplication Table for Number | `03-Control-Flow` | Codewars | 25 | ☐ |
| 029 | Grade Decision | `03-Control-Flow` | HackerRank | 25 | ☐ |
| 030 | Sum With a Loop | `03-Control-Flow` | HackerRank | 25 | ☐ |
| 031 | Factorial Table Lines | `03-Control-Flow` | w3resource | 25 | ☐ |
| 032 | Factorial | `04-Numbers` | W3Schools | 25 | ☐ |
| 033 | Sum 1 to N | `04-Numbers` | W3Schools | 25 | ☐ |
| 034 | Celsius to Fahrenheit | `04-Numbers` | W3Schools | 25 | ☐ |
| 035 | Sum of Two Numbers | `04-Numbers` | Edabit | 25 | ☐ |
| 036 | Next Number | `04-Numbers` | Edabit | 25 | ☐ |
| 037 | Minutes to Seconds | `04-Numbers` | Edabit | 25 | ☐ |
| 038 | Hours to Seconds | `04-Numbers` | Edabit | 25 | ☐ |
| 039 | Area of a Triangle | `04-Numbers` | Edabit | 25 | ☐ |
| 040 | Maximum Triangle Edge | `04-Numbers` | Edabit | 25 | ☐ |
| 041 | Rectangle Perimeter | `04-Numbers` | Edabit | 25 | ☐ |
| 042 | Age to Days | `04-Numbers` | Edabit | 25 | ☐ |
| 043 | The Farm Problem | `04-Numbers` | Edabit | 25 | ☐ |
| 044 | Remainder of Two Numbers | `04-Numbers` | Edabit | 25 | ☐ |
| 045 | Divisible by Five | `04-Numbers` | Edabit | 25 | ☐ |
| 046 | Multiple of 100 | `04-Numbers` | Edabit | 25 | ☐ |
| 047 | Less Than or Equal to Zero | `04-Numbers` | Edabit | 25 | ☐ |
| 048 | Absolute Difference | `04-Numbers` | w3resource | 25 | ☐ |
| 049 | Difference of Squares | `04-Numbers` | Exercism | 25 | ☐ |

### D-Gates (45)

| Gate | Title | Category | Platform | XP | Status |
|:---|:---|:---|:---|:---:|:---:|
| 050 | Two Sum | `01-Arrays-Hashing` | LeetCode | 40 | ☐ |
| 051 | Valid Anagram | `01-Arrays-Hashing` | LeetCode | 40 | ☐ |
| 052 | Contains Duplicate | `01-Arrays-Hashing` | LeetCode | 40 | ☐ |
| 053 | Move Zeros to End | `01-Arrays-Hashing` | W3Schools | 40 | ☐ |
| 054 | Letter Frequency | `01-Arrays-Hashing` | W3Schools | 40 | ☐ |
| 055 | Second Largest | `01-Arrays-Hashing` | W3Schools | 40 | ☐ |
| 056 | Running Sum | `01-Arrays-Hashing` | W3Schools | 40 | ☐ |
| 057 | Two Oldest Ages | `01-Arrays-Hashing` | Codewars | 40 | ☐ |
| 058 | Small Enough | `01-Arrays-Hashing` | Codewars | 40 | ☐ |
| 059 | Lost Number in Sequence | `01-Arrays-Hashing` | Codewars | 40 | ☐ |
| 060 | Scrabble Score | `01-Arrays-Hashing` | Exercism | 40 | ☐ |
| 061 | High Scores | `01-Arrays-Hashing` | Exercism | 40 | ☐ |
| 062 | Majority Element | `01-Arrays-Hashing` | LeetCode | 40 | ☐ |
| 063 | Single Number | `01-Arrays-Hashing` | LeetCode | 40 | ☐ |
| 064 | Happy Number | `01-Arrays-Hashing` | LeetCode | 40 | ☐ |
| 065 | Contains Duplicate II | `01-Arrays-Hashing` | LeetCode | 40 | ☐ |
| 066 | Find Pivot Index | `01-Arrays-Hashing` | LeetCode | 40 | ☐ |
| 067 | Valid Palindrome | `02-Strings` | LeetCode | 40 | ☐ |
| 068 | Reverse Words | `02-Strings` | W3Schools | 40 | ☐ |
| 069 | Most Common Character | `02-Strings` | W3Schools | 40 | ☐ |
| 070 | Highest and Lowest | `02-Strings` | Codewars | 40 | ☐ |
| 071 | Disemvowel Trolls | `02-Strings` | Codewars | 40 | ☐ |
| 072 | Digits Only Check | `02-Strings` | w3resource | 40 | ☐ |
| 073 | Raindrops | `02-Strings` | Exercism | 40 | ☐ |
| 074 | Bob | `02-Strings` | Exercism | 40 | ☐ |
| 075 | Hamming Distance | `02-Strings` | Exercism | 40 | ☐ |
| 076 | Isogram | `02-Strings` | Exercism | 40 | ☐ |
| 077 | Pangram | `02-Strings` | Exercism | 40 | ☐ |
| 078 | RNA Transcription | `02-Strings` | Exercism | 40 | ☐ |
| 079 | Acronym | `02-Strings` | Exercism | 40 | ☐ |
| 080 | Isomorphic Strings | `02-Strings` | LeetCode | 40 | ☐ |
| 081 | Ransom Note | `02-Strings` | LeetCode | 40 | ☐ |
| 082 | Is Subsequence | `02-Strings` | LeetCode | 40 | ☐ |
| 083 | Leap Year | `03-Numbers` | W3Schools | 40 | ☐ |
| 084 | Prime Check | `03-Numbers` | W3Schools | 40 | ☐ |
| 085 | Breaking Chocolate Problem | `03-Numbers` | Codewars | 40 | ☐ |
| 086 | Descending Order | `03-Numbers` | Codewars | 40 | ☐ |
| 087 | Square Every Digit | `03-Numbers` | Codewars | 40 | ☐ |
| 088 | Palindrome Number | `03-Numbers` | LeetCode | 40 | ☐ |
| 089 | Reverse Integer | `03-Numbers` | LeetCode | 40 | ☐ |
| 090 | Plus One | `03-Numbers` | LeetCode | 40 | ☐ |
| 091 | JSON Encode User Map | `04-JSON` | w3resource | 40 | ☐ |
| 092 | JSON Decode Sum Scores | `04-JSON` | w3resource | 40 | ☐ |
| 093 | Format Date Y-m-d | `05-Date` | w3resource | 40 | ☐ |
| 094 | Gigasecond | `05-Date` | Exercism | 40 | ☐ |

### C-Gates (38)

| Gate | Title | Category | Platform | XP | Status |
|:---|:---|:---|:---|:---:|:---:|
| 095 | Best Time to Buy and Sell Stock | `01-Sliding-Window` | LeetCode | 60 | ☐ |
| 096 | Longest Substring Without Repeating Characters | `01-Sliding-Window` | LeetCode | 60 | ☐ |
| 097 | Find All Anagrams in a String | `01-Sliding-Window` | LeetCode | 60 | ☐ |
| 098 | Minimum Size Subarray Sum | `01-Sliding-Window` | LeetCode | 60 | ☐ |
| 099 | Longest Repeating Character Replacement | `01-Sliding-Window` | LeetCode | 60 | ☐ |
| 100 | Maximum Average Subarray I | `01-Sliding-Window` | LeetCode | 60 | ☐ |
| 101 | Container With Most Water | `02-Two-Pointers` | LeetCode | 60 | ☐ |
| 102 | Longest Common Prefix | `02-Two-Pointers` | W3Schools | 60 | ☐ |
| 103 | 3Sum | `02-Two-Pointers` | LeetCode | 60 | ☐ |
| 104 | Sort Colors | `02-Two-Pointers` | LeetCode | 60 | ☐ |
| 105 | Squares of a Sorted Array | `02-Two-Pointers` | LeetCode | 60 | ☐ |
| 106 | Two Sum II - Input Array Is Sorted | `02-Two-Pointers` | LeetCode | 60 | ☐ |
| 107 | Group Anagrams | `03-Hashing` | LeetCode | 60 | ☐ |
| 108 | Longest Consecutive Sequence | `03-Hashing` | LeetCode | 60 | ☐ |
| 109 | Subarray Sum Equals K | `03-Hashing` | LeetCode | 60 | ☐ |
| 110 | Valid Parentheses | `04-Stack` | LeetCode | 60 | ☐ |
| 111 | Daily Temperatures | `04-Stack` | LeetCode | 60 | ☐ |
| 112 | Decode String | `04-Stack` | LeetCode | 60 | ☐ |
| 113 | Remove Duplicates Keep Order | `05-Arrays` | W3Schools | 60 | ☐ |
| 114 | Rotate Left | `05-Arrays` | W3Schools | 60 | ☐ |
| 115 | Merge Sorted Lists | `05-Arrays` | W3Schools | 60 | ☐ |
| 116 | Longest Streak | `05-Arrays` | W3Schools | 60 | ☐ |
| 117 | Maximum Subarray Sum | `05-Arrays` | W3Schools | 60 | ☐ |
| 118 | Equal Sides Of An Array | `05-Arrays` | Codewars | 60 | ☐ |
| 119 | Array Diff | `05-Arrays` | Codewars | 60 | ☐ |
| 120 | Bit Counting | `05-Arrays` | Codewars | 60 | ☐ |
| 121 | Pair Closest to Zero Sum | `05-Arrays` | w3resource | 60 | ☐ |
| 122 | Product of Array Except Self | `05-Arrays` | LeetCode | 60 | ☐ |
| 123 | Rotate Array | `05-Arrays` | LeetCode | 60 | ☐ |
| 124 | Partition Labels | `05-Arrays` | LeetCode | 60 | ☐ |
| 125 | Counting Bits | `05-Arrays` | LeetCode | 60 | ☐ |
| 126 | Merge Sorted Array | `05-Arrays` | LeetCode | 60 | ☐ |
| 127 | Flatten Array | `06-Nested-Arrays` | Exercism | 60 | ☐ |
| 128 | Word Frequency | `07-Strings` | W3Schools | 60 | ☐ |
| 129 | Stop Spinning My Words | `07-Strings` | Codewars | 60 | ☐ |
| 130 | Create Phone Number | `07-Strings` | Codewars | 60 | ☐ |
| 131 | Who Likes It | `07-Strings` | Codewars | 60 | ☐ |
| 132 | Zigzag Conversion | `07-Strings` | LeetCode | 60 | ☐ |

### B-Gates (34)

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
| 142 | Top K Frequent Elements | `02-Heap-TopK` | LeetCode | 90 | ☐ |
| 143 | Kth Largest Element in an Array | `02-Heap-TopK` | LeetCode | 90 | ☐ |
| 144 | Find the Duplicate Number | `03-Hashing-Medium` | LeetCode | 90 | ☐ |
| 145 | Valid Sudoku | `03-Hashing-Medium` | LeetCode | 90 | ☐ |
| 146 | Merge Intervals | `04-Intervals` | LeetCode | 90 | ☐ |
| 147 | Insert Interval | `04-Intervals` | LeetCode | 90 | ☐ |
| 148 | Non-overlapping Intervals | `04-Intervals` | LeetCode | 90 | ☐ |
| 149 | LRU Cache | `05-Cache-Design` | LeetCode | 90 | ☐ |
| 150 | Insert Delete GetRandom O(1) | `05-Cache-Design` | LeetCode | 90 | ☐ |
| 151 | Min Stack | `06-Stack-Design` | LeetCode | 90 | ☐ |
| 152 | Simplify Path | `06-Stack-Design` | LeetCode | 90 | ☐ |
| 153 | Evaluate Reverse Polish Notation | `06-Stack-Design` | LeetCode | 90 | ☐ |
| 154 | Maximum Depth (Nested Structure) | `07-Nested-Trees` | LeetCode | 90 | ☐ |
| 155 | Implement Trie (Prefix Tree) | `08-Trie-Design` | LeetCode | 90 | ☐ |
| 156 | Jump Game | `09-Greedy` | LeetCode | 90 | ☐ |
| 157 | Jump Game II | `09-Greedy` | LeetCode | 90 | ☐ |
| 158 | Subsets | `10-Backtracking` | LeetCode | 90 | ☐ |
| 159 | Permutations | `10-Backtracking` | LeetCode | 90 | ☐ |
| 160 | Combination Sum | `10-Backtracking` | LeetCode | 90 | ☐ |
| 161 | Generate Parentheses | `10-Backtracking` | LeetCode | 90 | ☐ |
| 162 | Letter Combinations of a Phone Number | `10-Backtracking` | LeetCode | 90 | ☐ |
| 163 | Rotate Image | `11-Matrix` | LeetCode | 90 | ☐ |
| 164 | Set Matrix Zeroes | `11-Matrix` | LeetCode | 90 | ☐ |
| 165 | Spiral Matrix | `11-Matrix` | LeetCode | 90 | ☐ |
| 166 | Next Permutation | `12-Arrays-Medium` | LeetCode | 90 | ☐ |

### A-Gates (17)

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

### S-Gates (3)

| Gate | Title | Category | Platform | XP | Status |
|:---|:---|:---|:---|:---:|:---:|
| 184 | Minimum Window Substring | `01-Hard-PHP-Fit` | LeetCode | 200 | ☐ |
| 185 | Edit Distance | `01-Hard-PHP-Fit` | LeetCode | 200 | ☐ |
| 186 | Sliding Window Maximum | `01-Hard-PHP-Fit` | LeetCode | 200 | ☐ |

### Side-Quests (21)

| Gate | Title | Folder | Platform | XP | Status |
|:---|:---|:---|:---|:---:|:---:|
| 187 | First and Last Digit | `CodeChef` | CodeChef | 25 | ☐ |
| 188 | Sum of Digits | `CodeChef` | CodeChef | 25 | ☐ |
| 189 | Reverse The Number | `CodeChef` | CodeChef | 25 | ☐ |
| 190 | Lucky Four | `CodeChef` | CodeChef | 25 | ☐ |
| 191 | Chef and Operators | `CodeChef` | CodeChef | 25 | ☐ |
| 192 | Second Largest of Three | `CodeChef` | CodeChef | 40 | ☐ |
| 193 | ATM Withdrawal | `CodeChef` | CodeChef | 40 | ☐ |
| 194 | Watermelon | `Codeforces` | Codeforces | 25 | ☐ |
| 195 | Way Too Long Words | `Codeforces` | Codeforces | 25 | ☐ |
| 196 | Team | `Codeforces` | Codeforces | 25 | ☐ |
| 197 | Bit++ | `Codeforces` | Codeforces | 25 | ☐ |
| 198 | Domino piling | `Codeforces` | Codeforces | 25 | ☐ |
| 199 | Next Round | `Codeforces` | Codeforces | 25 | ☐ |
| 200 | Beautiful Matrix | `Codeforces` | Codeforces | 25 | ☐ |
| 201 | Helpful Maths | `Codeforces` | Codeforces | 25 | ☐ |
| 202 | Stones on the Table | `Codeforces` | Codeforces | 25 | ☐ |
| 203 | Bear and Big Brother | `Codeforces` | Codeforces | 25 | ☐ |
| 204 | Wrong Subtraction | `Codeforces` | Codeforces | 25 | ☐ |
| 205 | Kefa and First Steps | `Codeforces` | Codeforces | 40 | ☐ |
| 206 | Selection Sort Steps | `W3Resource-Extras` | w3resource | 40 | ☐ |
| 207 | Bubble Sort Swap Count | `W3Schools-Extras` | W3Schools | 40 | ☐ |

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
