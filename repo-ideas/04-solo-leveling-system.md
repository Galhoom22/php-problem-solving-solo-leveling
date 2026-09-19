# 04 — Solo Leveling Progression System

> AI load this for Status Window, Hunter Ranks, Gates, Quests, XP, Shadows, Job Change, and session drama.

## 2. Solo Leveling Progression System

Theme the whole repo as a **Hunter System**: Status Window, Gates, Quests, Ranks, Shadows, and Level-Ups — inspired by Solo Leveling’s growth loop.

### The Story Hook (put near the top of root README)
```
[SYSTEM NOTICE]
You are Hunter Rank: E
Class: None
Title: The Weakest Solver

Warning: Most Hunters quit before Level 10.
You will not.

Objective: Clear Gates. Absorb Patterns. Level Up Alone.
Command waiting: Arise.
```

### Status Window (always visible in root README)
Show a Solo Leveling-style status panel — this is the “HUD” that makes progress feel real:

```
╔══════════════════════════════════════════╗
║              STATUS WINDOW               ║
╠══════════════════════════════════════════╣
║ Name        : (You)                      ║
║ Level       : 7                          ║
║ Hunter Rank : D-Rank                     ║
║ Job         : Pattern Assassin (locked)  ║
║ Title       : Gate Runner                ║
║ XP          : 340 / 500                  ║
║ Fatigue     : 12 / 100                   ║
║ Streak      : 5 days                     ║
║ Gates Open  : up to C-Rank               ║
╠══════════════════════════════════════════╣
║ STATS                                    ║
║  STR  14   → grit / finish hard Gates       ║
║  AGI  11   → speed under time pressure      ║
║  INT  18   → pattern recognition            ║
║  SEN  13   → edge-case detection            ║
║  VIT  10   → daily quest consistency        ║
╠══════════════════════════════════════════╣
║ SHADOW ARMY (Mastered Patterns)          ║
║  • Hash Map Lookup                       ║
║  • Two Pointers                          ║
╚══════════════════════════════════════════╝
```

| Field | Solo Leveling Meaning | Repo Meaning |
|:---|:---|:---|
| **Level** | Hunter level | Numeric growth 1 → 50+ |
| **Hunter Rank** | E → National / Monarch Candidate | Unlock which Gates you may enter |
| **Job** | Class after Job Change Quest | Specialization after a big milestone |
| **Title** | System title | Flavor earned by feats |
| **XP** | Experience | Points to next LEVEL UP |
| **Fatigue** | Overwork meter | Soft session limiter; high fatigue → shorter quest |
| **Stats** | STR/AGI/INT/SEN/VIT | Real skill axes tied to quest types |
| **Shadow Army** | Shadows under command | Patterns you can code cold in interviews |

### Hunter Rank Ladder (Association ranks)
Use Solo Leveling hunter ranks — **not** Iron/Gold game ranks:

| Hunter Rank | Levels (suggested) | Gates unlocked | Feeling |
|:---|:---|:---|:---|
| **E-Rank** | 1–5 | E-Gates only | The weakest hunter |
| **D-Rank** | 6–10 | D-Gates (Easy core) | First real fights |
| **C-Rank** | 11–18 | C-Gates (Easy → early Medium) | Reliable clearer |
| **B-Rank** | 19–26 | B-Gates (main Medium) | Dangerous hunter |
| **A-Rank** | 27–34 | A-Gates (hard Medium / stretch) | Elite |
| **S-Rank** | 35–42 | S-Gates (DP / selected Hard) | National threat |
| **National Level** | 43–48 | Full Hard + serious Instant Dungeons | Top of the Association |
| **Monarch Candidate** | 49–50+ | Prestige raids, teach-back, full Shadow command | “I alone level up” |

Inner stars inside a rank (micro-progress between promotions):
- `E-Rank ★` → `E-Rank ★★` → `E-Rank ★★★` → promote to `D-Rank`

### Gates = Problem Dungeons
Every problem folder is a **Gate**. You only enter Gates at or below your Hunter Rank.

| Gate Rank | Typical LeetCode | Min Hunter Rank | Intent |
|:---|:---|:---|:---|
| **E-Gate** | Easy warmup | E-Rank | Survive. Build PHP 8.5 confidence |
| **D-Gate** | Easy | D-Rank | Core interview Easy |
| **C-Gate** | Easy → early Medium | C-Rank | First real pattern pressure |
| **B-Gate** | Medium | B-Rank | Main interview Medium set |
| **A-Gate** | Medium → Hard | A-Rank | Stretch raids |
| **S-Gate** | Hard | S-Rank+ | Boss / prestige fights |

System denial (fun + useful):
```
[SYSTEM]
Access Denied.
This is a B-Rank Gate.
Your Hunter Rank is D-Rank.
Recommended: clear pending D/C Gates first.
```

### Special Gate Events (anime spikes — keep practice exciting)
Use these rarely so they stay special:

| Event | What happens | When to use |
|:---|:---|:---|
| **Boss Gate** | One harder problem that seals a pattern chapter | End of a Part / Milestone |
| **Double Dungeon** | Two linked Gates in one session (easy → twist) | After C-Rank, once per arc |
| **Red Gate** | Timed Gate: must clear before timer ends | Instant Dungeon warmups |
| **Key Drop** | Clearing a Gate unlocks a Hidden Quest | Random-feeling, but planned |
| **Instance Reset** | Re-clear a weak Gate for Shadow mastery | Review days |

### Quest Types (Solo Leveling quest board)
| Quest Type | Repo meaning | Reward vibe |
|:---|:---|:---|
| **Daily Quest** | 1 warm drill OR rewrite 1 review from memory | XP + VIT + Streak |
| **Normal Gate** | Standard problem clear | XP + pattern progress |
| **Urgent Quest** | Debug / fix a failed clear under time | AGI + bonus XP |
| **Job Change Quest** | Big milestone exam | Unlock Job + Title |
| **Instant Dungeon** | Timed mock (Track 3) | Big XP + rank gate progress |
| **Penalty Quest** | Soft recovery if Daily skipped 2+ days | Tiny warm-up before new Gates |
| **Hidden Quest** | Explain a pattern with no notes | Title / Shadow recruit |
| **Raid Quest** | 3-Gate weekly set | Rank stars + AGI |

Daily Quest example (System tone):
```
[DAILY QUEST - Arrive]
Objective:
- Clear 1 unlocked Gate OR rewrite 1 review card from memory
- Run your PHP 8.5 solution once

Reward: XP +25, VIT +1, Streak +1
Failure: Fatigue +15 → Penalty Quest tomorrow

The weak wait. The Player clears.
```

### XP, LEVEL UP & System Notices
Award XP only when clear conditions are met (solve + explain + CHECK):

| Action | XP | Extra |
|:---|:---:|:---|
| Clear Skill Book / review card | +20 | INT +1 chance |
| Clear E-Gate | +25 | — |
| Clear D-Gate | +40 | — |
| Clear C-Gate | +60 | SEN +1 if edge cases listed |
| Clear B-Gate | +90 | — |
| Clear A-Gate | +130 | — |
| Clear S-Gate / Boss Gate | +180 | Title chance |
| Pass Job Change / Milestone | +100 | Job progress |
| Clear Instant Dungeon | +150 | AGI +2 |
| Interview-style explain aloud | +15 | Shadow recruit progress |
| First-try clear (no hint) | +20 | Title: “Lone Cleared” progress |
| Re-clear weak Gate until fluent | +10 | Shadow mastery (no full XP again) |

Level-up curve (gentle, addictive):
- Level 1→2 needs 100 XP
- Each next level needs `previous + 25` XP

On every level-up, print a dramatic System notice:
```
[SYSTEM]
════════════════════
   L E V E L   U P
════════════════════
Level 7 → Level 8

STR 14 → 14
AGI 11 → 12
INT 18 → 19
SEN 13 → 13
VIT 10 → 11

A new C-Gate has become available.
Arise.
```

### Stats → Real Skills (fantasy that trains you)
| Stat | Grows when you… | Interview meaning |
|:---|:---|:---|
| **STR** | Finish hard Gates without quitting | Persistence |
| **AGI** | Timed clears / Instant Dungeons / Red Gates | Speed |
| **INT** | New patterns / Skill Books / review cards | Pattern IQ |
| **SEN** | Edge cases & complexity callouts | Carefulness |
| **VIT** | Daily Quests / streaks | Consistency |

+1 to a matching stat on matching quests (keep growth slow so numbers feel earned).

### Shadow Army = Mastered Patterns (“Arise”)
When a pattern is truly mastered (related Gates cleared + explain with no notes):
```
[SHADOW EXTRACTION SUCCEEDED]
Target Pattern: Sliding Window
Command: Arise.

Shadow "Sliding Window" has joined your Army.
You may summon it in interviews without panic.
```

Shadows live in the Status Window. “Summoning” = naming the pattern and coding it cold.

### Job Change Quest (big motivational spike)
After a major milestone (example: solid C-Rank clears + Milestone 2):
```
[JOB CHANGE QUEST]
Normal Hunters stay average.
The Player chooses a Job.

Options:
- Pattern Assassin  → AGI/INT (speed + recognition)
- Gate Breaker      → STR/SEN (Medium raids + edge cases)
- Shadow Monarch    → balanced mastery + teach-back

Clear the quest. Unlock Job. Expand Instant Dungeon access.
```

### Rank-Up Rules (Association Promotion)
Promote Hunter Rank when **both** are true:
1. Level is in the next rank’s range.
2. Rank Gate checklist is cleared (XP alone is never enough).

Example **D-Rank → C-Rank**:
```
- [ ] Level >= 11
- [ ] Required E/D Skill Books marked ✅
- [ ] At least 8 D-Gates cleared
- [ ] Hash Map + Two Pointers explained with no notes
- [ ] Milestone 1 passed
```

Example **B-Rank → A-Rank**:
```
- [ ] Level >= 27
- [ ] Core Medium patterns practiced
- [ ] At least 3 Instant Dungeons / Red Gates cleared
- [ ] Weak Gates re-cleared from last rank
```

Promotion notice:
```
[ASSOCIATION NOTICE]
Hunter Rank promoted.
D-Rank → C-Rank

New Gates unlocked.
Do not waste this strength.
```

### Soft Lock / Hard Lock (System Access)
- **Soft lock**: `[SYSTEM WARNING] Gate exceeds your Rank.` Skip-ahead only with dependency callouts.
- **Hard lock**: Instant Dungeons / S-Gates / Boss Gates sealed until Association clearance.
- Per session recipe (anti-burnout): **1 Daily Quest + 1–2 Gates** max. Watch Fatigue.

### Session Dramatic Beats (make every study day feel like an episode)
Run sessions in this emotional arc:
1. **System Login** — show Status Window (Level, Rank, XP, Fatigue).
2. **Quest Accept** — Daily Quest + recommended Gate.
3. **Enter Gate** — problem brief, constraints, pattern hint only if needed.
4. **Battle** — brute force → optimize → PHP 8.5 code (student writes it).
5. **Clear** — CHECK + XP + possible stat bump.
6. **LEVEL UP / Arise?** — only when earned; celebrate briefly.
7. **Quest Update** — next recommended Gate; log to `SYSTEM-LOG.md` if major.

### Recommended Next Quest (end of every session)
```
[QUEST UPDATE]
Hunter Rank: D-Rank
Fatigue: 20/100
Shadows: 2

Recommended:
1) Daily Quest — rewrite Hash Map review from memory
2) Gate — Best Time to Buy and Sell Stock (C-Gate)
3) Hidden Quest — explain window invariant aloud (+15 XP)

Arise when ready.
```

### Where the System Lives in the Repo
- Root `README.md` → Status Window + Hunter Rank ladder + Quest Board
- Each Gate `README.md` → Gate Rank, Min Hunter Rank, XP, System brief
- Track READMEs → “Association clearance required: Rank X+”
- `SYSTEM-LOG.md` → level-ups, titles, Job Change, Arise history (the fun diary)

### Anti-Cheat / Anti-Illusion (System Integrity)
- ✅ without CHECK → `0 XP` + `[SYSTEM] False clear detected.`
- Copy-paste with no explanation → `0 XP`, no Shadow Extraction
- Rank cannot jump by reading only
- Prefer **Rank Freeze** over demotion until weak Gates are re-cleared
- Penalty Quests are light warm-ups — never demotivating punishment

### Fun Tone Rules (motivating, not cringe-spam)
- System notices at: session start, Gate clear, LEVEL UP, rank-up, Arise, Job Change.
- Do **not** System-spam every chat line.
- Teaching stays clear and serious; fantasy wraps **progress**, not the algorithm explanation.
- Every fantasy reward must map to a real skill gain — never empty points.
- If the student is tired (high Fatigue): shorter Daily Quest > forcing a Boss Gate.

---
