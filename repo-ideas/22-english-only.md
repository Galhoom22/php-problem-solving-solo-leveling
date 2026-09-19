# 22 — English-Only Law (Repository Language)

> AI load this when writing or editing **any** committed file.
> Chat with the hunter may be any language. **Repo content must stay English.**

---

## The Law

1. The entire repository is **English 100%** — always.
2. Applies to: READMEs, Gate briefs, Skill Books, comments, identifiers, commit messages for this repo, CI messages, PR templates, `AGENTS.md`, `repo-ideas/`, and file/folder names that contain letters.
3. Allowed: Latin letters (English prose), digits, punctuation, code symbols, box-drawing, and emoji used as UI markers.
4. Forbidden: Arabic, Chinese, Japanese, Korean, Cyrillic, Hebrew, or any other non-Latin **letters** in committed files/paths.
5. Hunter chat language does **not** change this law. Agents must still write repo files in English even if the hunter speaks Arabic (or any other language).

## Why

- GitHub / FAANG / open-source default
- Consistent public Status Window and Gate bank
- CI and collaborators can review without translation drift

## Enforcement

- Documented in `AGENTS.md`, `CONTRIBUTING.md`, PR template
- CI: `scripts/ci/validate-repo.php` → `[english]` errors fail the build

```bash
php scripts/ci/validate-repo.php
```

## Agent rule

If the hunter asks for Arabic (or any non-English) **inside the repo**, refuse the file change, explain the English-Only Law, and offer to keep chat help in their language while writing English files.
