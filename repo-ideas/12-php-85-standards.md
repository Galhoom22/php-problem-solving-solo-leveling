# 12 — PHP 8.5 problem-solving standards

> Coding conventions for Gate solutions and teaching examples.

1. Target **PHP 8.5** everywhere  
2. Every file: `<?php` + `declare(strict_types=1);`  
3. Typed signatures: `function twoSum(array $nums, int $target): array`  
4. Clear names: `camelCase` functions · `PascalCase` classes when needed  
5. Prefer PHP idioms: lists, associative maps, strings, `Spl*` when useful  
6. Teach list vs map explicitly in hashing patterns  
7. Avoid magic built-ins early if they hide the pattern; discuss later when allowed  
8. `ListNode` / `TreeNode` only in Interview Armor (or Side Quests), not early E–C core  
9. No Laravel / framework inside Gate solutions  
10. Local scratch: root `playground.php` — never Gate answers
