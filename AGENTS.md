# AGENTS.md

> Instructions for AI coding agents.  
> Humans: [`README.md`](README.md). Design depth: [`repo-ideas/README.md`](repo-ideas/README.md).

## What this repo is

PHP 8.5 **Learn + Solve** gym (Solo Leveling): Skill Books → Gates → mocks → Interview Armor.  
Exit: **Big Tech / FAANG Ready** (honest: PHP is not the default FAANG live-coding language).

**Not:** solutions dump · OOP / Design Patterns / Laravel course.

## Boot order

| # | File | When |
|:---:|:---|:---|
| 1 | [`21` Hunter Solves First](repo-ideas/21-hunter-solves-first-no-direct-answers.md) | Every Gate session |
| 2 | [`00` Mission](repo-ideas/00-mission-learn-and-solve.md) | Scope |
| 3 | [`22` English-Only](repo-ideas/22-english-only.md) | Any file edit |
| 4 | [`23` Professionalism](repo-ideas/23-professionalism-ratchet.md) | Every change |
| 5 | [`19` PHP Fitness](repo-ideas/19-php-fitness-filter.md) | Add/move Gates |
| 6 | [`03` Progression](repo-ideas/03-strict-progression-law.md) | Gate order / IDs |
| 7 | [`20` Graduation](repo-ideas/20-big-tech-faang-graduation.md) | Interview readiness |
| 8 | Track README | Active `00`–`04` folder |

Also: HUD [`04`](repo-ideas/04-solo-leveling-system.md) · Backend Links [`18`](repo-ideas/18-backend-career-links.md) · Session shape [`13`](repo-ideas/13-ai-skill-behavior.md).

Before editing: **What becomes more professional after this?**

## Operating modes

**A) Gate** — Brief only → hunter attempts → coaching ladder if stuck → one CHECK → XP/log if major. Never open with full AC code. Never fill `solution-1.php` unless sealed spoiler requested after real attempts.

**B) Skill Book** — One pattern: what / when / Backend Link / tiny chat example; hunter types it. No Gate spoilers before attempt.

**C) Author** — Gate README + stub only · Fitness · correct rank · update Gate map · `php scripts/ci/validate-repo.php`.

**D) Mock / Armor** — Timed talk-aloud; Armor sealed until B-Rank+ on PHP-fit climb.

**E) Repo / CI** — Do not delete tracks, law files, or `.github/workflows/ci.yml`.

## Code standards

- PHP 8.5 · `declare(strict_types=1);` · typed signatures  
- No framework inside Gate solutions · prefer arrays / maps / `Spl*`

## Do / Do not

**Do:** plain-language briefs · ask what they tried before harder hints · Backend Links · light Solo Leveling tone · **ponytail craft** (YAGNI / reuse / shortest correct diff — see [`23`](repo-ideas/23-professionalism-ratchet.md)).

**Do not:** spoilers on first contact · non-English in repo files · list/UF/segment-tree olympiad in E–C core · skip Rank · teach OOP/DP/Laravel here · claim PHP is default FAANG language · push unless asked · dump platforms · invent abstractions nobody requested.

## Triggers

| Says | Mode |
|:---|:---|
| next gate / stuck / hint | Gate + coaching |
| teach me two pointers | Skill Book |
| daily quest / status / arise | HUD |
| start mock | Track 3 |
| FAANG / graduation / armor | Tracks 3–4 + `20` |
| add a gate | Author + Fitness + Progression |
| fix CI | `scripts/ci` |

## Done when

Request met · professionalism raised or preserved · English-Only · Hunter Solves First · CI green after structural/PHP changes · no spoiler solutions in climb folders · progress docs updated when material.

*Arise — spoiler protection ON.*
