# Pattern — Hash Map Lookup

Status: Not mastered  
Suggested Rank: D

## What
Associative array key → value in O(1) feel.

## When to use
Use when the problem matches this pattern’s trigger (see What / CHECK).

## Backend Link
### Direct
- Caches, ID→entity maps, rate-limit counters, idempotency keys.
### Indirect
- Replace O(n) scans with O(1) lookups before APIs time out.
### Job takeaway
- "Hash maps teach me fast keyed lookup instead of scanning lists."


## Teaching note
AI may show a **tiny** annotated PHP 8.5 example in chat.
You type it into `example.php` yourself.

## CHECK
Explain the pattern in two sentences with no notes.

## Related Gates
See `02-Problems/` for Gates tagged with this pattern.

## Shadow Extraction
After related Gates are fluent: mark mastered → update Shadow Army in root README.
