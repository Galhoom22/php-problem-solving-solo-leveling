# 12 — PHP 8.5 Problem Solving Standards

> AI load this for PHP-specific coding conventions in solutions.

## 10. PHP 8.5-Specific Problem Solving Ideas

From the current repo’s standards plus PHP realities:

1. **Use typed signatures** for functions: `function twoSum(array $nums, int $target): array`.
2. **PHP arrays are flexible** — clearly explain list vs associative map in every hashing pattern.
3. **Avoid magical built-ins early** if they hide the pattern (for example `sort`, then discuss when it is allowed).
4. **Linked List / Tree nodes**: define `class ListNode` / `class TreeNode` in problem style.
5. **Heap in PHP**: `SplPriorityQueue` or a simulation — document the choice in notes.
6. **Simple tests**: start with `assert` or a runner script; later PHPUnit in Mock (like Lecture 31).
7. **`playground.php`** at the root or in Mock for quick experiments.
8. Do not depend on Laravel or any framework inside problem solutions.
9. Target **PHP 8.5** everywhere: badges, requirements, code standards, and examples.

---
