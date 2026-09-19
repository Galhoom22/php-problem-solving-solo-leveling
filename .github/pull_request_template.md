## Hunter PR Checklist

> `main` is protected. PRs must keep Solo Leveling laws intact.

### Intent
- [ ] What does this PR change? (Gates / Skill Books / docs / CI)
- [ ] **Professionalism Ratchet:** after this PR the repo is more professional than before (state how in 1 sentence)
- [ ] All new/edited content is **English only** (no Arabic or other non-Latin letters in files/paths)
- [ ] I did **not** push a full spoiler solution as the default Gate answer

### Gate authoring (if adding/editing Gates)
- [ ] Passed **PHP Fitness Filter** (`repo-ideas/19-php-fitness-filter.md`)
- [ ] Placed under correct `E-Gates` … `S-Gates` (or labeled `Side-Quests`)
- [ ] `README.md` has: System Brief, Learn First, Backend Link, Source, Gate Rank, Min Hunter Rank, XP
- [ ] `solution-1.php` ships as **stub + TODO** (Hunter Solves First) unless Status is Cleared by the hunter
- [ ] No linked-list / heavy CP structures in E/D/C core climb
- [ ] Gate map in `02-Problems/README.md` updated

### PHP standards
- [ ] PHP files use `declare(strict_types=1);`
- [ ] Typed function signatures where applicable

### Progression
- [ ] Does not break Strict Progression Law (harder-before-easier forbidden on required path)
- [ ] Interview Armor / linked-list classics stay in `04-Interview-Armor/` only

### CI
- [ ] I expect `Repo Laws + PHP Lint` and `Sacred Structure Guard` to pass

---

**Sacred rule:** Explain what the Gate wants → hunter tries alone → coach with hints if stuck — no full solution dump first.

**Professionalism Ratchet:** every merge must raise (or carefully preserve) repo craft — see `repo-ideas/23-professionalism-ratchet.md`.
