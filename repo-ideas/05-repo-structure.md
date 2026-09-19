# 05 — Proposed Repo Structure

> AI load this when scaffolding folders and tracks.
> Live root README map must stay in sync with this file.

## Root ordering (numeric prefixes)

Folders are numbered so GitHub lists them in learning order.

```
php-problem-solving-solo-leveling/
│
├── README.md                         ← At a glance + Status Window + Graduation
├── CONTRIBUTING.md
├── AGENTS.md
├── SOURCES.md
├── SYSTEM-LOG.md
├── LICENSE
├── playground.php
│
├── 00-Awakening/                     ← Track 0: PHP + PS literacy
│   ├── Part-0-PHP-Basics/
│   └── Part-0-Problem-Solving-Intro/
│
├── 01-Patterns-And-Fundamentals/     ← Track 1: Skill Books
│   ├── PATTERN-CATALOG.md            ← DSA pattern index (not GoF Design Patterns)
│   ├── Part-1-Warmup/
│   ├── Part-2-Core-PHP-PS-Patterns/
│   ├── Part-3-Advanced-PHP-Fit/
│   └── Milestones/
│
├── 02-Problems/                      ← Track 2: PHP-fit Gates
│   ├── 01-E-Gates/ … 06-S-Gates/     ← numbered so explorer order = climb order
│   └── 07-Side-Quests/               ← optional (CodeChef, Codeforces, …)
│
├── 03-Mock-Interview/                ← Track 3: Instant Dungeons
│   └── sessions/
│
├── 04-Interview-Armor/               ← Track 4: Big Tech / FAANG armor (late)
│   ├── Part-1-Linked-Lists-Interview/
│   ├── Part-2-TreeNode-Interview-Form/
│   ├── Part-3-Classic-Mediums/
│   └── Part-4-Language-Transfer-Sprint/
│
├── scripts/ci/validate-repo.php
├── .github/
└── repo-ideas/
```

### Gate folder shape

```
02-Problems/{01-E|02-D|03-C|04-B|05-A|06-S}-Gates/{NN-Pattern}/Gate-NNN-kebab/
  README.md          ← teaching brief + Source (no spoiler)
  solution-1.php     ← stub + TODO only
```

Pattern category folders under each rank use **unique ascending** `NN-` prefixes (no duplicate numbers).

### Gate ID law (Strict Progression)

Gate numbers are **global and sequential by difficulty lane**:

| Lane | ID range (current) |
|:---|:---|
| 01-E-Gates | 001–049 |
| 02-D-Gates | 050–094 |
| 03-C-Gates | 095–132 |
| 04-B-Gates | 133–166 |
| 05-A-Gates | 167–183 |
| 06-S-Gates | 184–186 |
| 07-Side-Quests | 187–207 |
| Interview Armor | 208–224 |

Never append a new Easy Gate with an ID after a Medium/Hard Gate. New imports must be **insertion-sorted** into the correct rank block (renumber later IDs if needed), not “next wave number”.

### Why Tracks 0 → 4?

| Track | Role |
|:---|:---|
| 00-Awakening | Enough PHP + PS literacy for total beginners |
| 01-Skill Books | Teach PHP-fit DSA/patterns (Learn-first) |
| 02-Gates | Apply learning (Learn + Solve) the PHP way |
| 03-Mock Gauntlet | Timed talk-aloud interview pressure |
| 04-Interview Armor | Big Tech/FAANG classics + language transfer (exit readiness) |

Required path for **FAANG Ready** graduation:

```
Awakening → Skill Books → PHP-fit Gates → Mock Gauntlet → Interview Armor (+ Transfer Sprint)
```

Required path for **PHP Hunter** badge (minimum):

```
Awakening → Skill Books → PHP-fit Gates → basic mocks
```

Default product goal: push hunters to **Big Tech Ready** / **FAANG Ready** (`20-big-tech-faang-graduation.md`).

Hunters who already know basic PHP may soft-skip Awakening after a placement CHECK.
Do not open Interview Armor before B-Rank+ on the PHP-fit climb.
Respect Hunter Rank gates throughout.

### Teaching density by track

- Awakening / E-Gates: maximum teaching
- D/C/B Gates: pattern + Backend Link + PHP idiom
- Mocks: interview behavior
- Interview Armor: honest “interview-shaped” training after foundations
