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
4. `README.md`: System Brief · Learn First · Backend Link · Source · Clear Rule (same legend as root README — no algorithm dump)
5. `solution-1.php`: stub + `TODO` + `declare(strict_types=1);`
6. Update [`02-Problems/README.md`](02-Problems/README.md) (or run `php scripts/rebuild-gate-map.php`)
7. `php scripts/ci/validate-repo.php`

Verbal theory Q&A lives in the sibling [technical-interview-questions](https://github.com/Galhoom22/technical-interview-questions) bank — do not turn this gym into an answer dump.

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
`PHP 8.5 Learn + Solve gym: 224 DSA Gate stubs, Solo Leveling ranks, Hunter Solves First — not a solutions dump.`

**Topics:** `php` `php85` `dsa` `leetcode` `problem-solving` `interview-prep` `algorithms` `solo-leveling`

```bash
# from a clean main (all changes committed; .cursor/ is gitignored)
gh repo create php-problem-solving-solo-leveling --public --source=. --remote=origin --push
```

`ci.yml` starts under [`.github/pending-workflows/`](.github/pending-workflows/) so the first push works without the OAuth `workflow` scope. Activate Actions:

```bash
gh auth refresh -h github.com -s repo,workflow
git mv .github/pending-workflows/ci.yml .github/workflows/ci.yml
git commit -m "Enable GitHub Actions CI workflow"
git push
```

Then enable branch protection: [`.github/BRANCH_PROTECTION.md`](.github/BRANCH_PROTECTION.md)
