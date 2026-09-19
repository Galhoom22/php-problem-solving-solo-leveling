# Contributing

How to change this gym. Chat may be any language; **committed files stay English**.

## Quick map

| Want to… | Go here |
|:---|:---|
| Solve Gates | [`02-Problems/01-E-Gates/`](02-Problems/01-E-Gates/) Gate **001** |
| Learn a DSA pattern | [`01-Patterns-And-Fundamentals/PATTERN-CATALOG.md`](01-Patterns-And-Fundamentals/PATTERN-CATALOG.md) |
| Add a Gate | Checklist below |
| Publish to GitHub | Section below |
| Repo laws / AI | [`AGENTS.md`](AGENTS.md) · [`repo-ideas/`](repo-ideas/) |
| Protect `main` | [`.github/BRANCH_PROTECTION.md`](.github/BRANCH_PROTECTION.md) |

## Adding a Gate

1. Pass PHP Fitness Filter — [`repo-ideas/19`](repo-ideas/19-php-fitness-filter.md)
2. Place under `01-E-Gates` … `06-S-Gates` or `07-Side-Quests/` (Armor for list/TreeNode theater)  
3. Folder: `Gate-NNN-kebab-case/` — ID must keep lane order (E→…→Armor) 
4. Fill the **Gate template** below (no algorithm dump)
5. Update [`02-Problems/README.md`](02-Problems/README.md) (or run `php scripts/rebuild-gate-map.php`)
6. `php scripts/ci/validate-repo.php`

### Gate folder template

```
02-Problems/{01-E|02-D|03-C|04-B|05-A|06-S}-Gates/{NN-Category}/Gate-NNN-kebab/
├── README.md          ← brief only (sections below)
└── solution-1.php     ← declare(strict_types=1); + typed stub + TODO
```

### Gate README template (required)

```markdown
# Gate NNN — Title

Status: Not cleared
Related skill: Pattern-NN-…
Difficulty: …
Gate Rank: E|D|C|B|A|S
Min Hunter Rank: …-Rank
XP Reward: …
Source Platform: …
Pattern tag: …

## System Brief
…

## What This Gate Is Testing
…

## Learn First (System Tutorial)
- …

## Backend Link (Why this matters at work)
### Direct
- …
### Indirect
- …
### Job takeaway
- …

## Clear Rule
Mark ✅ in `02-Problems/README.md` and update the Status Window only after you can explain and clear it cleanly.

## Source
Source: … — https://…
```

Sibling boundaries (do **not** merge into this gym):

- OOP lectures → [php-oop-documentation](https://github.com/Galhoom22/php-oop-documentation)
- Verbal theory Q&A → [technical-interview-questions](https://github.com/Galhoom22/technical-interview-questions)

Before every change: **What becomes more professional after this?**

## CI

```bash
php scripts/ci/validate-repo.php
```

Optional: `php scripts/audit-hunter-ready.php` · `php scripts/audit-consistency.php --links`

Required PR checks: `Repo Laws + PHP Lint` · `Sacred Structure Guard`

## Publish to GitHub (first time)

Suggested **name:** `php-problem-solving-solo-leveling`  

**Description:**  
`PHP 8.5 Learn + Solve gym: 230 DSA Gate stubs, Solo Leveling ranks, Hunter Solves First — not a solutions dump.`

**Topics:** `php` `php85` `dsa` `leetcode` `problem-solving` `interview-prep` `algorithms` `solo-leveling`

```bash
# from a clean main (all changes committed; .cursor/ is gitignored)
gh repo create php-problem-solving-solo-leveling --public --source=. --remote=origin --push
```

CI workflow is live at [`.github/workflows/ci.yml`](.github/workflows/ci.yml).  
Branch protection: [`.github/BRANCH_PROTECTION.md`](.github/BRANCH_PROTECTION.md)

If a clone ever lacks Actions (OAuth without `workflow` scope), restore with:

```bash
gh auth refresh -h github.com -s repo,workflow
# ensure .github/workflows/ci.yml exists, then push
```
