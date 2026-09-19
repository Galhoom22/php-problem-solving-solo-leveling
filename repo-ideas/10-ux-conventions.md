# 10 — Content & Organization UX

> AI load this for naming, file conventions, HUD visuals, and require rules.

## 8. Content & Organization UX Ideas

### Folder Names
- `Lecture-NN-topic` → `Pattern-NN-topic` / `Gate-NNN-topic`
- Zero-padded numbers for ordering.
- kebab-case after the number.
- Problem bank folders prefer `E-Gates` … `S-Gates` for Solo Leveling unlock clarity.

### Recurring Work Files
| File | Role |
|:---|:---|
| `README.md` | Gate / skill guide + System brief |
| `solution-1.php` | First clear attempt |
| `solution-2.php` | Improved clear |
| `review-N.md` / `review.md` | Skill card |
| `notes.md` | Personal notes / interview answer |
| `Milestone/` | Job Change / Association trial solutions |
| `SYSTEM-LOG.md` | Level-ups, titles, Arise events |

### `require` Naming Rule
If multiple files are needed in the same folder during early learning, use `require 'solution-1.php'` with the actual filename — not the class name (taken from the current repo). Later, PSR-4 can be introduced in Instant Dungeons only if needed.

### Progress Visuals (System HUD)
- Full **Status Window** in root README
- Hunter Rank ladder with sealed 🔒 / cleared ✅ Gates
- Quest Board: Daily Quest + Recommended Gate
- Fatigue bar (soft session limiter)
- Shadow Army list (mastered patterns)
- “Current Quest” pointing to the next unlocked Gate
- Higher Gates sealed until Association clearance
- Level-up / Arise banners in `SYSTEM-LOG.md`

### Self-contained Tracks
Each track is its own folder; opening it on GitHub shows its guide automatically via `README.md`.

---
