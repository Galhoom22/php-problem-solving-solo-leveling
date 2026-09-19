# Pending GitHub Actions workflow

`ci.yml` lives here so the first `git push` works with a default `gh` OAuth token (no `workflow` scope).

## Activate Actions on GitHub

```bash
gh auth refresh -h github.com -s repo,workflow
mkdir -p .github/workflows
git mv .github/pending-workflows/ci.yml .github/workflows/ci.yml
git commit -m "Enable GitHub Actions CI workflow"
git push
```

Then turn on branch protection: [`../BRANCH_PROTECTION.md`](../BRANCH_PROTECTION.md).
