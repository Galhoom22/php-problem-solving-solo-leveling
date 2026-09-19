# Protecting `main`

CI alone is not enough. Turn on **GitHub Branch Protection** (or Rulesets) so broken / law-breaking changes cannot land on `main` by accident.

Also in this folder: [`pull_request_template.md`](pull_request_template.md) · live Actions: [`workflows/ci.yml`](workflows/ci.yml).

## Required settings (GitHub UI / Rulesets)

**Repo → Settings → Rules → Rulesets** (or Branches → Branch protection)

Apply to: `main`

Enable:

1. **Restrict updates** / block force pushes to `main`
2. **Require a pull request before merging**
   - Required approvals: **0** is OK for solo (still blocks direct force chaos when combined with checks)
   - Dismiss stale approvals when new commits are pushed
3. **Require status checks to pass**
   - Require branches to be up to date before merging
   - Required checks (exact job names from [`.github/workflows/ci.yml`](workflows/ci.yml)):
     - `Repo Laws + PHP Lint`
     - `Sacred Structure Guard`
4. **Block force pushes**
5. **Do not allow bypassing** except carefully limited admins

This repo should already have an active **Protect main** ruleset; keep status checks aligned with the two CI job names above.

## What CI enforces automatically

| Check | Law |
|:---|:---|
| Sacred root + tracks exist | Structure / Status Window |
| Gate README sections | Learn First · Backend Link · Source · ranks · XP |
| Gate folder naming `Gate-NNN-kebab` | UX conventions |
| Gate Rank matches E/D/C/B/A/S folder | Strict Progression Law |
| No ListNode / heavy CP in E–C | PHP Fitness Filter |
| No open `spoilers/` under `02-Problems` | Hunter Solves First |
| `declare(strict_types=1)` + `php -l` | PHP 8.5 standards |
| Letters are Latin-script only in scanned files/paths | English-Only Law (`22`) |
| Design law files present (incl. professionalism ratchet `23`) | Mission / graduation / coaching / craft bar |
| Sacred paths not deleted in PRs | Protect main from accidental wipe |

Local run:

```bash
php scripts/ci/validate-repo.php
```

## Solo hunter note

If you work alone, still keep **required status checks** on. You can set required reviewers to 0, but never disable CI checks on `main`.
