# 10 — Content & organization UX

> Naming, file roles, and HUD surfaces for this gym.

## Names

- `Pattern-NN-kebab` · `Gate-NNN-kebab` · zero-padded IDs  
- Rank folders: `01-E-Gates` … `06-S-Gates` · optional `07-Side-Quests/` (numbers = explorer order)

## Gate / Skill files

| File | Role |
|:---|:---|
| `README.md` | Brief + teaching + Source |
| `solution-1.php` | Hunter clear (stub shipped) |
| `solution-2.php` | Optional improved clear (hunter creates) |
| `notes.md` | Optional interview notes (hunter creates) |

Root: `SYSTEM-LOG.md` for level-ups / Arise. Status Window lives in root `README.md`.

## Require

Use real filenames (`require 'solution-1.php'`), not invented class names.

## HUD (keep light)

Status Window · Rank ladder · Daily Quest · Shadow Army · Fatigue — teaching stays clear (no System-spam every line).
