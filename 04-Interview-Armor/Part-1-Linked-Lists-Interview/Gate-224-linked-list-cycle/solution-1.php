<?php

declare(strict_types=1);

final class ListNode
{
    public function __construct(
        public int $val = 0,
        public ?ListNode $next = null,
    ) {
    }
}

function hasCycle(?ListNode $head): bool
{
    // TODO: hunter solves this (Interview Armor)
    return false;
}
