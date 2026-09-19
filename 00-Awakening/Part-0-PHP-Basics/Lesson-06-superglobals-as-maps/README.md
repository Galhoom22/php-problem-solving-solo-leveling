# Lesson 06 — Superglobals as Maps

Status: Not cleared  
Competency map: HackerRank PHP (Basic) — Variables / predefined arrays

## Learn
PHP exposes request/server data as **associative arrays** (maps):

- `$_GET`, `$_POST`, `$_SERVER`, `$_ENV` (and friends)
- Same muscle as Gate hashing: key → value

In this gym we rarely need real HTTP. Treat superglobals as **examples of assoc arrays** from the web environment.

## Backend Link
### Direct
- Reading query params, headers, path info in PHP backends.
### Indirect
- “Environment is data in a map.”
### Job takeaway
- "Superglobals are just arrays with rules."

## CHECK
In plain words: what is the difference between a list array and `$_SERVER`?

## Practice
In `practice.php`, build a **fake** assoc array shaped like query params (`name`, `page`) and print each key/value with `foreach`. Do **not** rely on a real browser request.

## Source
Competency reference: HackerRank — PHP (Basic) skill — https://www.hackerrank.com/skills-directory/php_basic
