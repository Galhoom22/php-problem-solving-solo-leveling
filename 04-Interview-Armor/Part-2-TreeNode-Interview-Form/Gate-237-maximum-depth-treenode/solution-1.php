<?php

declare(strict_types=1);

final class TreeNode
{
    public function __construct(public int $val = 0, public ?TreeNode $left = null, public ?TreeNode $right = null) {}
}

function maxDepth(?TreeNode $root): int
{
    // TODO: hunter solves this (Interview Armor)
    return 0;
}
