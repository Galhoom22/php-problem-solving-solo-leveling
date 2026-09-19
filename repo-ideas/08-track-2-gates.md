# 08 — Track 2: Gates

> Gate folders, README shape, and solving session cycle.  
> Live map: [`../02-Problems/README.md`](../02-Problems/README.md). Spoiler law: `21`. Fitness: `19`.

## Session (one Gate)

1. Confirm Hunter Rank unlock  
2. Problem Brief only (I/O, examples, constraints, Backend Link)  
3. Hunter attempts `solution-1.php` alone  
4. If stuck → coaching ladder (`21`)  
5. One CHECK · mark ✅ · XP · Status Window  

Never ship finished answers as default Gate files. Never open a session with a full AC dump.

## Layout

```
02-Problems/{01-E|02-D|03-C|04-B|05-A|06-S}-Gates/{NN-Pattern}/Gate-NNN-kebab/
  README.md
  solution-1.php   ← stub + TODO only
```

Side Quests: `02-Problems/07-Side-Quests/` (optional).  
Rank folder numbers exist so explorer/GitHub sort matches the climb (E→…→Side).  
List/TreeNode theater: `04-Interview-Armor/` only.  
Author scaffold (copy-paste): [`CONTRIBUTING.md`](../CONTRIBUTING.md#gate-folder-template).

## Gate README (required fields)

- Metadata: Status · Gate Rank · Min Hunter Rank · XP · related skill  
- `## System Brief`  
- `## What This Gate Is Testing`  
- `## Learn First`  
- `## Backend Link`  
- `## Clear Rule`  
- `## Source` (URL or `(original …)`)  

Optional after attempt: notes, Walkthrough, FAANG transfer line.  
IDs must stay lane-ordered (E→…→Armor) — CI enforces.

## Dedup

One problem idea → one climb Gate. Dual Sources OK. Related Gates cross-link. Armor twins are not a second core Gate.
