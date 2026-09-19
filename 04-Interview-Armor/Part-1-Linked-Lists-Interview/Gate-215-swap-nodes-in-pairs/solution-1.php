<?php

declare(strict_types=1);

final class ListNode
{
    public function __construct(public int $val = 0, public ?ListNode $next = null) {}
}

function swapPairs(?ListNode $head): ?ListNode
{
    // TODO: hunter solves this (Interview Armor)
    return $head;
}
