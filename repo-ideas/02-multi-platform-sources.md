# 02 — Multi-Platform Sources

> AI load this when adding/importing problems from LeetCode, Codeforces, Codewars, HackerRank, and other platforms.

## 1.5 Multi-Platform Sources (PHP Problem Aggregation)

### Goal
Build a **huge PHP-only problem collection** by pulling famous challenges from major platforms, then normalizing them into one Solo Leveling Gate system.

### Primary Sources (must include)
| Platform | Why it matters | Typical use in this repo |
|:---|:---|:---|
| [LeetCode](https://leetcode.com/) | Interview standard; huge catalog | Core Easy/Medium/Hard Gates |
| [Codeforces](https://codeforces.com/) | CP depth | **Optional Side Quests only** after PHP Fitness Filter — not default required climb |
| [Codewars](https://www.codewars.com/?language=php) | Native PHP kata; kata ranks | Warmups, PHP-flavor micro-Gates (best early source) |
| [HackerRank](https://www.hackerrank.com/) | Interview + domain tracks | Arrays/strings/warmup + interview sets |

### Strong Additional Sources (add these too)
| Platform | Why include | Notes |
|:---|:---|:---|
| [Exercism — PHP track](https://exercism.org/tracks/php) | Mentored PHP exercises | Great E/D Skill Books & language fluency |
| [Edabit — PHP](https://edabit.com/challenges/php) | 350+ PHP challenges, Very Easy → Expert | Excellent early-rank volume |
| [GeeksforGeeks — PHP practice](https://www.geeksforgeeks.org/php/php-exercises-practice-questions-and-solutions/) | Topic drills + explanations | Pattern warmups / side quests |
| [HackerEarth](https://www.hackerearth.com/) | Practice + contests | Extra Medium/CP-style Gates |
| [CodeChef](https://www.codechef.com/) | Contests + practice | Optional Side Quests after PHP Fitness |
| [SPOJ](https://www.spoj.com/) | Classical archive | Optional prestige only if PHP-fit |
| [Project Euler](https://projecteuler.net/) | Math puzzles | Optional INT side quests — not core PHP identity |
| [Advent of Code](https://adventofcode.com/) | Annual puzzles | Seasonal raids if PHP-fit parsing/array heavy |
| [CodinGame](https://www.codingame.com/) | Game-like puzzles | Fun side quests |
| [CodeCrafters — PHP](https://app.codecrafters.io/tracks/php) | Build real tools in PHP | Late-rank Boss Projects (strong PHP identity) |
| NeetCode / Blind 75 lists | Interview roadmaps | **Filter through PHP Fitness** — keep pattern, drop PHP-unnatural items from required path |
| [NeetCode All](https://neetcode.io/practice/practice/allNC) | Huge unstructured practice pool (~973) | **Never** mirror into required climb; optional random drills only after Fitness |

### Source Policy (important)
1. **PHP-only solutions in this repo** — even if the original platform’s judge is multi-language.
2. Prefer platforms with **official PHP support** when practicing online (LeetCode, HackerRank, Codewars, Exercism, Edabit, etc.).
3. **PHP Fitness Filter first** (`19-php-fitness-filter.md`): do not import into the required climb if the problem feels like C++/Java DSA theater with PHP syntax.
4. Prefer array/string/map/nested-structure problems; reject heavy linked-list pointer drills and heavy CP structures for the core path.
5. For platforms where PHP may be limited/unavailable in the online judge (some CP sites), allow only if the problem still passes PHP Fitness and the student solves locally in PHP 8.5.
6. Every Gate README must end with a `Source:` (or `Sources:`) line including platform + URL.
7. Do **not** paste copyrighted problem statements verbatim at huge length if the platform forbids it — link the source and write a short System Brief / paraphrase where needed.
8. Deduplicate: if “Two Sum” appears on multiple sites, keep **one Gate**, list multiple Sources.
9. Codeforces/CodeChef/SPOJ/Project Euler → optional Side Quests unless clearly PHP-fit and backend-relevant.

### Unified Difficulty Normalization (so multi-source stays ordered)
Different sites use different scales. Convert everything into this repo’s Gate Rank before placing it in the climb path:

| This Repo Gate Rank | Rough mapping from sources | Hunter Rank unlock |
|:---|:---|:---|
| **E-Gate** | Edabit Very Easy/Easy, Codewars 8kyu–7kyu, Exercism easy intro, GFG basics, HR Easy warmups | E-Rank |
| **D-Gate** | LeetCode Easy (simple), Codewars 7kyu–6kyu, HR Easy, Edabit Easy/Medium-light | D-Rank |
| **C-Gate** | LeetCode Easy→early Medium, Codewars 6kyu–5kyu, CF ~800–1000 (adapted), HR Medium-light | C-Rank |
| **B-Gate** | LeetCode Medium core, Codewars 5kyu–4kyu, CF ~1000–1400, HR Medium | B-Rank |
| **A-Gate** | Harder Medium / Light Hard, Codewars 3kyu–2kyu, CF ~1400–1800 | A-Rank |
| **S-Gate** | LeetCode Hard, CF harder, Project Euler tough, prestige Boss Gates | S-Rank+ |

Normalization rules:
- Always map to **this repo’s Gate Rank**, never trust one site’s label blindly.
- If unsure, place the Gate **one rank easier**, then promote it only after playtesting.
- Never insert a newly imported Hard/CF1500 problem into early folders “because it is famous”.

### Import Workflow (how the bank grows without chaos)
```
1) Pick a source problem
2) Confirm it teaches a useful pattern (or mark as side quest)
3) Map to Gate Rank using the normalization table
4) Assign pattern tag + Min Hunter Rank + XP
5) Place folder ONLY in the correct ordered slot
6) Write Gate README + Source link
7) Student solves in PHP 8.5 locally (and/or on the platform if PHP is supported)
8) Update Gate Source Map + Status Window when cleared
```

### Volume Ambition
- Aim for a **large bank** over time (hundreds of Gates), not a tiny 20-problem toy repo.
- But ship in waves:
  - Wave 1: E/D core (fluency)
  - Wave 2: C/B interview core
  - Wave 3: A/S + CP prestige
- The climb path shown to the hunter is curated; the archive can be bigger.

---
