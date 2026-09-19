# 20 — Big Tech & FAANG Graduation (Exit Ready)

> AI load this to define what “done” means.
> A hunter who finishes this repo should be ready for **large-company coding interviews** and **FAANG-style rounds** — not only “better at PHP puzzles”.

---

## Exit promise (non-negotiable product goal)

Anyone who completes the full graduation path should be able to:

1. **Clear Medium coding interviews** under time pressure (talk aloud → brute → optimize → code → test)
2. **Recognize core patterns instantly** (hashing, two pointers, sliding window, stack, binary search, trees/BFS-DFS, heaps/top-K, intervals, light graphs/DP)
3. **Explain complexity** (Time/Space) confidently
4. **Connect patterns to backend judgment** (why this matters at work)
5. **Transfer solutions** to a common interview language (Python/Java/JS/C++) when the company requires it
6. Walk into **Big Tech / FAANG-style** screens with practiced mock experience — not raw hope

### One-line exit definition
> Graduate = interview-ready for large companies & FAANG-style coding rounds, while also being a stronger PHP problem solver.

---

## Honest path design (two layers)

| Layer | Purpose | Feeling |
|:---|:---|:---|
| **PHP Core Climb** | Learn + Solve the PHP way (`19` fitness) | “This makes me stronger in PHP + backend thinking” |
| **Interview Armor** | Cover Big Tech / FAANG classics that interviews still ask (even if less PHP-day-job) | “Now I’m armored for the interview arena” |
| **Language Transfer Sprint** | Re-express Shadow Army patterns in Python/Java/JS/C++ | “I can fight in their language” |
| **Mock Gauntlet** | Timed talk-aloud Instant Dungeons | “I’ve done this under pressure” |

PHP Core stays PHP-first.
Interview Armor is **required for FAANG/Big-Tech graduation**, clearly labeled as interview preparation — not fake “you’ll reverse linked lists at work every day”.

---

## Graduation ranks (badges)

| Badge | Meaning | Required |
|:---|:---|:---|
| **PHP Hunter** | Finished PHP-fit core climb + Backend Links + basics mocks | Strong PHP PS/DSA |
| **Big Tech Ready** | PHP Hunter + Interview Armor + Mock Gauntlet | Ready for large-company coding interviews |
| **FAANG Ready** | Big Tech Ready + Language Transfer Sprint + harder mocks | Ready for FAANG-style screens |

Default product goal for the full repo: push hunters to **FAANG Ready** (or at least **Big Tech Ready**).

---

## Graduation checklist — Big Tech Ready

```
Patterns / Skills
- [ ] Arrays & Hashing (incl. frequency / top-K thinking)
- [ ] Two Pointers
- [ ] Sliding Window
- [ ] Stack / Queue
- [ ] Binary Search
- [ ] Trees BFS/DFS (nested structures + TreeNode interview form)
- [ ] Heap / Top-K
- [ ] Intervals
- [ ] Light Graph (BFS/DFS / topo)
- [ ] DP / memoization intro
- [ ] Cache design (LRU)

Interview Armor (required for Big Tech / FAANG graduation)
- [ ] Linked List classics (reverse, merge, cycle, remove nth) — interview form
- [ ] At least one harder tree/graph Medium under time
- [ ] Can explain any Shadow pattern in 60 seconds

Behavior under pressure
- [ ] 3+ phone-screen lite mocks passed (45–60 min, talk aloud)
- [ ] 2+ onsite-coding lite mocks passed (1 Medium, tradeoffs)
- [ ] Can recover from a wrong first approach without freezing

Communication
- [ ] Clarify → examples → brute → optimize → code → test
- [ ] States complexity without prompting
- [ ] Backend Link awareness (why pattern matters)

Repo integrity
- [ ] Required Gates cleared in ascending order
- [ ] Review cards / notes for weak Gates
- [ ] Status Window shows A-Rank+ (suggested) before claiming Big Tech Ready
```

---

## Graduation checklist — FAANG Ready (adds on top)

```
- [ ] All Big Tech Ready items complete
- [ ] Language Transfer Sprint complete for chosen interview language
      (re-solve or re-write key Shadow patterns in Python/Java/JS/C++)
- [ ] 2+ Transfer mocks: solve thinking in PHP patterns, speak/code as interview language
- [ ] Harder Instant Dungeon set cleared (mixed Medium, one stretch)
- [ ] Can teach one pattern back (teach-back CHECK)
- [ ] Suggested Rank: S-Rank or National Level before claiming FAANG Ready
```

---

## Track 4 — Interview Armor (required for graduation)

Folder idea:

```
04-Interview-Armor/
  README.md
  Part-1-Linked-Lists-Interview/
  Part-2-TreeNode-Interview-Form/
  Part-3-Classic-Mediums/
  Part-4-Language-Transfer-Sprint/
```

### Rules
1. Unlock only after PHP Core Climb reaches **B-Rank+** (patterns already strong).
2. Label every Gate:
   > Interview Armor — asked in Big Tech/FAANG; learned after PHP-fit foundations.
3. Still Learn + Solve in **PHP 8.5** inside the repo.
4. Then Transfer Sprint rewrites critical clears in the target interview language (can live in `transfer/` notes or parallel files clearly marked).
5. Do **not** move Interview Armor into early E/D ranks (breaks PHP-feeling + progression).

### Minimum Linked List Armor set
- Reverse Linked List
- Merge Two Sorted Lists
- Linked List Cycle
- Remove Nth Node From End
- (optional) LRU with list+map explanation for interviews

### Why this doesn’t violate PHP Fitness
- PHP Fitness governs the **core identity climb**.
- Interview Armor is an explicit **graduation expansion** for companies that still ask these.
- Hunters are told the truth: day-job PHP rarely needs hand-built lists; interviews still might.

---

## Mock Gauntlet (Track 3 graduation requirement)

Minimum set before Big Tech Ready:

| Mock | Format | Pass bar |
|:---|:---|:---|
| Phone Screen A | Easy + Medium, 45–60m, talk aloud | Clears both or clear Medium + strong Easy recover |
| Phone Screen B | Different patterns | Same |
| Onsite Lite A | 1 Medium, 45m | Working solution + complexity + edge cases |
| Onsite Lite B | 1 Medium (new pattern family) | Same |
| Pattern Rapid Fire | 8 patterns, name approach only | 7/8 correct |

FAANG Ready adds:
- 1 harder mixed dungeon
- 1 Transfer mock in interview language

---

## Language Transfer Sprint (FAANG Ready)

Pick one primary interview language (Python recommended for speed, or Java/JS/C++ as needed).

For each Shadow in the core army:
1. Explain pattern in 30–60 seconds
2. Re-code key Gate (or a twin) in the interview language
3. Note syntax mapping (PHP assoc array → dict/HashMap/Map, etc.)

Store progress in:
```
04-Interview-Armor/Part-4-Language-Transfer-Sprint/NOTES.md
```
(Repo solutions remain PHP-first; transfer copies are graduation evidence.)

---

## What “ready” is NOT
- Memorizing 200 solutions without explanation
- Only Easy Gates
- PHP syntax trivia without patterns
- Claiming FAANG Ready without mocks + transfer
- Skipping Interview Armor then applying to FAANG coding rounds cold

---

## Public README promise (use this wording)

> Finish this repo and you won’t just “know some PHP puzzles”.  
> You will be trained to clear **large-company and FAANG-style coding interviews**: patterns, communication, timed mocks, and language transfer — after building real PHP problem-solving strength first.

---

## AI rules
- Treat **Big Tech / FAANG readiness** as a primary exit goal.
- Keep PHP-fit core first; schedule Interview Armor late on purpose.
- Never hide that some Armor Gates are interview-shaped.
- Never graduate a hunter to FAANG Ready without mocks + transfer checklist.
- When hunter says “am I ready?”, evaluate against this file — not vibes.
