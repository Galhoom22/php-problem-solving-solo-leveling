# Pattern — LRU Cache Design

Status: Not mastered  
Suggested Rank: B

## What
Capacity + recent-use eviction — backend gold.

## When to use
Use when the problem matches this pattern’s trigger (see What / CHECK).

## Backend Link
### Direct
- Hot-key retention, eviction intuition for in-memory caches.
### Indirect
- Capacity + recency trade-offs show up in Redis TTL design.
### Job takeaway
- "LRU trains me to design caches that stay bounded."


## Teaching note
AI may show a **tiny** annotated PHP 8.5 example in chat.
You type it into `example.php` yourself.

## CHECK
Explain the pattern in two sentences with no notes.

## Related Gates
See `02-Problems/` for Gates tagged with this pattern.

## Shadow Extraction
After related Gates are fluent: mark mastered → update Shadow Army in root README.
