# 05 — Proposed Repo Structure

> AI load this when scaffolding folders and tracks.

## 3. Proposed Repo Structure (Adapted)

### Root Ordering (Numeric Prefixes)
From the current repo: folders are numbered so GitHub lists them in learning order.

```
php-problem-solving/
│
├── README.md                         ← Status Window + Graduation badges
│
├── 00-Awakening/                     ← Absolute beginner: PHP + PS literacy
│   ├── README.md
│   ├── Part-0-PHP-Basics/
│   └── Part-0-Problem-Solving-Intro/
│
├── 01-Patterns-And-Fundamentals/     ← Track 1: Skill Books (PHP-fit DSA teaching)
│   ├── README.md
│   ├── Part-1-Warmup/
│   ├── Part-2-Core-PHP-PS-Patterns/
│   └── Part-3-Advanced-PHP-Fit/
│
├── 02-Problems/                      ← Track 2: PHP-fit Gates
│   ├── README.md
│   ├── E-Gates/ … S-Gates/
│   └── Side-Quests/                  ← optional extras (not graduation-critical)
│
├── 03-Mock-Interview/                ← Track 3: Instant Dungeons / Mock Gauntlet
│   ├── README.md
│   └── sessions/
│
├── 04-Interview-Armor/               ← Track 4: Big Tech / FAANG graduation armor
│   ├── README.md
│   ├── Part-1-Linked-Lists-Interview/
│   ├── Part-2-TreeNode-Interview-Form/
│   ├── Part-3-Classic-Mediums/
│   └── Part-4-Language-Transfer-Sprint/
│
├── SOURCES.md
└── SYSTEM-LOG.md
```

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

---
