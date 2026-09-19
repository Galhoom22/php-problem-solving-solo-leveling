# Gate 173 🔥 — Design Authentication Manager

Status: Not cleared
Related skill: Pattern-02-hash-map-lookup
Difficulty: Medium
Gate Rank: B
Min Hunter Rank: B-Rank
XP Reward: 90
Source Platform: LeetCode
Pattern tag: NeetCode PHP+Backend

## System Brief
Tokens live for `timeToLive` seconds. Implement `generate(tokenId, currentTime)`, `renew(tokenId, currentTime)` (only if unexpired), and `countUnexpiredTokens(currentTime)`.

Expiry is exclusive of the exact expiry timestamp (see LeetCode rules).

## What This Gate Is Testing
Hash map of token → expiry; filter by `currentTime`.

## Learn First (System Tutorial)
- Store expiry timestamps, not only “alive” booleans
- Renew extends from currentTime by TTL if still valid

## Backend Link (Why this matters at work)
### Direct
- Session/JWT-style TTL, API keys, magic-link tokens, CSRF tickets.
### Indirect
- Expiry sweeps and renew semantics.
### Job takeaway
- "Auth state is a map with deadlines."

## Clear Rule
Mark ✅ in `02-Problems/README.md` and update the Status Window only after you can explain and clear it cleanly.

## Source
Source: LeetCode — Design Authentication Manager — https://leetcode.com/problems/design-authentication-manager/ (NeetCode-style design; strong PHP backend fitness)