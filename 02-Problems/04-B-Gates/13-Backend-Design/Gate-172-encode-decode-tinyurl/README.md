# Gate 172 — Encode and Decode TinyURL

Status: Not cleared
Related skill: Pattern-02-hash-map-lookup
Difficulty: Medium
Gate Rank: B
Min Hunter Rank: B-Rank
XP Reward: 90
Source Platform: LeetCode
Pattern tag: NeetCode PHP+Backend

## System Brief
Design `encode(longUrl)` / `decode(shortUrl)` for a URL shortener. Encoding must be reversible. Codec choice is yours (hash, counter, base62…).

Example: encode `https://example.com/foo` → some short URL; decode returns the original.

## What This Gate Is Testing
Bidirectional map between short codes and long URLs.

## Learn First (System Tutorial)
- Store long→short and short→long (or derive one side)
- Collision handling if you hash

## Backend Link (Why this matters at work)
### Direct
- Link shorteners, redirect services, shareable tokens.
### Indirect
- Idempotent ID generation and lookup tables.
### Job takeaway
- "Short links are just reversible key-value maps."

## Clear Rule
Mark ✅ in `02-Problems/README.md` and update the Status Window only after you can explain and clear it cleanly.

## Source
Source: LeetCode — Encode and Decode TinyURL — https://leetcode.com/problems/encode-and-decode-tinyurl/ (also NeetCode Hashing)