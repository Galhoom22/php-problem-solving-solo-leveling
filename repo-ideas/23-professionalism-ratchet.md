# 23 — Professionalism Ratchet Law

> AI load this before **any** repo change (docs, Gates, CI, structure, copy).
> Chat language may vary. Committed work must obey English-Only (`22`) **and** this ratchet.

---

## The Law

Every change merged into this repository must leave it **more professional than before** — never flat, never sloppy, never “good enough to dump.”

If a change does not clearly raise professionalism (or at least protect it while adding real value), **do not merge it**.

### One-line rule
> **Ratchet only:** professionalism may stay equal only when the change is a pure correction of breakage; it must never go down. Prefer changes that move it **up**.

---

## What “more professional” means here

A change counts as an upgrade when it improves at least one of:

1. **Clarity** — clearer README/Gate brief, less ambiguity, better naming  
2. **Consistency** — matches tracks, Gate template, XP/rank rules, English-Only  
3. **Correctness** — fixes wrong metadata, broken links, CI gaps, false claims  
4. **Standards** — PHP 8.5 + `strict_types`, typed stubs, Hunter Solves First  
5. **Curation quality** — PHP Fitness Filter, no junk/duplicate spam on the required climb  
6. **Operability** — better CI, branch protection docs, agent guidance, import discipline  
7. **Honesty** — FAANG/PHP claims stay accurate; Side Quests labeled as optional  

A change **fails** the ratchet if it:

- Adds noise without teaching value (random dumps, emoji spam in law files, cruft folders)  
- Weakens spoiler protection or ships finished answers as the default path  
- Breaks English-Only, structure, or CI laws  
- Lowers copy quality (vague briefs, missing Backend Link / Source)  
- “Quick hacks” that make the public GitHub face look amateur  

---

## Decision checklist (before editing)

```
- [ ] What becomes more professional after this change? (one sentence)
- [ ] Does it obey English-Only, Hunter Solves First, Fitness, Progression?
- [ ] Would I be proud to show this diff on a public GitHub README walkthrough?
- [ ] If unsure → smaller, cleaner change — or do not merge
```

---

## Agent / maintainer duty

1. Refuse (or redesign) requests that would make the repo look less serious.  
2. When the hunter asks for bulk imports: **curate**, don’t mirror entire sites.  
3. Prefer improving templates, maps, CI, and law docs over piling low-signal files.  
4. After structural/content changes, run `php scripts/ci/validate-repo.php`.  

---

## Relation to other laws

| Law | Role |
|:---|:---|
| `21` Hunter Solves First | Protects learning integrity |
| `22` English-Only | Protects public language standard |
| `19` PHP Fitness | Protects PHP identity of the climb |
| `03` Strict Progression | Protects ordering honesty |
| **`23` Professionalism Ratchet** | Protects overall repo craft — every diff must raise (or carefully preserve) the bar |

---

## PR / commit expectation

Commit messages and PR descriptions should state the **professionalism upgrade** (why the repo is better), not only the file list.
