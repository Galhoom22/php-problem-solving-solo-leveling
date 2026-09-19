# Contributing / Hunter Guide

## Push this repo to GitHub (first time)

```bash
cd problem-solving-PHP-LeetCode
git init
git add .
git commit -m "Initial commit: Solo Leveling PHP problem-solving gym"

# Create an empty repo on GitHub, then:
git branch -M main
git remote add origin https://github.com/<YOUR_USER>/<YOUR_REPO>.git
git push -u origin main
```

Or use GitHub CLI:

```bash
gh repo create <YOUR_REPO> --public --source=. --remote=origin --push
```

## Adding a new Gate

1. Pass the **PHP Fitness Filter** (`repo-ideas/19-php-fitness-filter.md`)
2. Place it in the correct `E-Gates` … `S-Gates` folder (ascending difficulty)
3. Write `README.md` with System Brief, Learn First, Backend Link, Source URL
4. Ship a **stub only** (`solution-1.php` with `TODO`) — no finished answer
5. Update the Gate map in `02-Problems/README.md`

## Sacred rule

Hunter solves first. No spoiler solutions as the default path.
See `repo-ideas/21-hunter-solves-first-no-direct-answers.md`.
