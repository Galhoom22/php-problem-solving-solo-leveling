# 17 — FAANG Prep & Language Transfer

> AI load this when the hunter cares about FAANG / Big Tech interviews, or comes from another language (Python, Java, JS, C++, Go…).
> Honest about PHP’s interview reality — still makes the repo FAANG-useful.

---

## The honest truth (say it clearly)

PHP is **not** the most common language in FAANG / Big Tech coding interviews.
Many companies expect **Python, Java, C++, or JavaScript** in the live coding round.

That does **not** make this repo useless for FAANG prep.

Why:
- FAANG interviews mostly test **Problem Solving + DSA patterns**, not “can you write Laravel”.
- Patterns are language-transferable: Two Pointers, Sliding Window, BFS/DFS, Heaps, Graphs, DP…
- If you master the pattern in PHP 8.5, you can **re-implement the same idea** in the interview language later.
- Explaining the approach out loud matters as much as syntax — this repo trains that.

### Product stance
> Train deep thinking and DSA **the PHP way** first.  
> Become stronger at PHP + backend judgment.  
> Then put on **Interview Armor** + **Language Transfer** so you graduate ready for Big Tech / FAANG coding interviews.

Full graduation definition: `20-big-tech-faang-graduation.md`.

---

## Dual win for every hunter

| Goal | How this repo helps |
|:---|:---|
| **Get better at PHP** | All solutions, teaching, and practice are PHP 8.5 |
| **Prepare for FAANG-style interviews** | PHP-fit core + required Interview Armor + mocks + transfer (`20`) |
| **Coming from another language** | Learn DSA the PHP way, then Transfer Sprint back to interview language |
| **PHP-native hunter aiming at FAANG** | Core climb → Mock Gauntlet → Interview Armor → Transfer Sprint → FAANG Ready badge |

---

## What transfers to FAANG (keep these central)

Focus the required climb on skills FAANG interviews actually probe:

- Arrays & Hashing
- Two Pointers / Sliding Window
- Stack / Queue
- Binary Search
- Linked Lists
- Trees (BFS/DFS)
- Heaps / Priority Queue
- Graphs (BFS/DFS, topo)
- Backtracking
- Intervals / Greedy
- 1D/2D DP intro
- Complexity communication (Time/Space)
- Interview talk track: clarify → examples → brute → optimize → code → test

These are **language-agnostic skills**. PHP is the training vehicle.

### What is secondary for FAANG (still OK in the bank)
- PHP-only trivia
- Framework / web PHP topics
- Very language-specific Codewars kata that don’t train transferable DSA

Keep those as side quests, not the FAANG core path.

---

## For hunters from another language

If the hunter already knows Python/Java/JS/C++:

1. They may soft-skip deep PHP Awakening after a short placement CHECK.
2. They still follow Gate order for DSA progression.
3. They write solutions in **PHP 8.5** inside this repo (repo rule).
4. After clearing a Gate, optional **Transfer Drill**:
   - Re-state the approach in plain English
   - Mentally map PHP arrays/`SplPriorityQueue`/etc. to their interview language
   - Optionally rewrite the same algorithm later in Python/Java outside this repo (not required to store here)

### Transfer Drill card (optional section in Gate README)
```markdown
## FAANG Transfer Note
- Pattern name: Hash Map Lookup
- Say this in an interview in 30 seconds: ...
- In Python you might use dict; in Java HashMap; in PHP associative array
- Complexity stays the same across languages
```

---

## For PHP hunters targeting FAANG companies

Recommended path inside this system:
1. Climb Skill Books + Gates until B/A-Rank on the FAANG core set
2. Practice Instant Dungeons (timed, talk aloud)
3. Near interview season: add a **Language Switch Sprint** (outside or beside the repo):
   - Re-solve your Shadow Army patterns in the company’s likely language
   - Keep using this repo’s pattern memory — don’t restart DSA from zero

The repo’s job is to forge the **algorithmic hunter**.
The final interview syntax can be swapped.

---

## FAANG-style Instant Dungeons (Track 3 alignment)

Mock sessions should feel like interview rounds, not only contest grind:

| Session type | Goal |
|:---|:---|
| **Phone screen lite** | 1 Easy + 1 Medium, 45–60 min, talk aloud |
| **Onsite coding lite** | 1 Medium (maybe hard stretch), explain tradeoffs |
| **Pattern rapid-fire** | 3 short pattern IDs without coding |
| **Transfer mock** | Solve in PHP here, then re-explain as if coding in Python/Java |

Still Solo Leveling flavored — but the CHECK mirrors interview behavior.

---

## Curriculum bias for FAANG usefulness (PHP-fit first)

When choosing what to import next into the required path, prefer:
1. Patterns that are both interview-useful **and** PHP-natural (arrays/maps/strings/nested data/heaps/intervals)
2. Blind 75 / NeetCode items **after** `19-php-fitness-filter.md` (drop linked-list pointer chains from required)
3. Clean Easy → Medium ladders with Backend Links

Deprioritize for the **required** path:
- PHP-unnatural interview theater (classic linked lists)
- Obscure CP-only tricks
- Pure PHP trivia with no PS/backend transfer

Optional Side Quests may hold Interview Theater items with clear labels.
---

## Messaging to put in the public README

Be transparent and confident:

> PHP is not the most common FAANG interview language — and that’s fine.  
> This repo trains transferable Problem Solving + DSA **the PHP way** (arrays, maps, strings, nested data, caches, queues…).  
> You get stronger at PHP **and** build interview strength without fake C++-shaped drills.  
> If a company wants Python/Java/JS, transfer the PHP-fit patterns at the end.

---

## AI rules for this topic
- Never pretend PHP is the default FAANG coding language.
- Never tell PHP hunters that FAANG prep is pointless in this repo.
- Emphasize **pattern mastery + explanation** using PHP-natural structures.
- For polyglot hunters: enforce PHP solutions in-repo; encourage transfer drills for interview language.
- Never put PHP-unnatural Gates in the required climb just to “finish Blind 75”.
- Keep FAANG-useful Gates strictly progressive, high-signal, and PHP-fit.
