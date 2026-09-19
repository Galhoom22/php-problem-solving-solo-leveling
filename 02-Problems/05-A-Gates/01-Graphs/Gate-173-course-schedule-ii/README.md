# Gate 173 — Course Schedule II

Status: Not cleared
Related skill: Pattern-20-simple-graphs
Difficulty: Medium-Hard
Gate Rank: A
Min Hunter Rank: A-Rank
XP Reward: 130
Source Platform: LeetCode
Pattern tag: NeetCode PHP-fit

## System Brief
Same prerequisites as Course Schedule, but return **any valid order** of courses to finish all `numCourses` classes. If impossible, return an empty array.

Example: `numCourses = 4`, `prerequisites = [[1,0],[2,0],[3,1],[3,2]]` → `[0,1,2,3]` (or `[0,2,1,3]`).

## What This Gate Is Testing
Topological sort (Kahn / DFS) that emits order, not only boolean.

## Learn First (System Tutorial)
- Build adjacency list + indegree
- BFS Kahn: queue zero-indegree nodes and record order

## Backend Link (Why this matters at work)
### Direct
- Migration order, job DAGs, package install order, feature rollout deps.
### Indirect
- Detect cycles while producing a plan.
### Job takeaway
- "Schedule I asks if; Schedule II asks how."


## Related Gates
- Gate 172 Course Schedule — boolean feasibility first

## Clear Rule
Mark ✅ in `02-Problems/README.md` and update the Status Window only after you can explain and clear it cleanly.

## Source
Source: LeetCode — Course Schedule II — https://leetcode.com/problems/course-schedule-ii/ (also NeetCode Graphs)