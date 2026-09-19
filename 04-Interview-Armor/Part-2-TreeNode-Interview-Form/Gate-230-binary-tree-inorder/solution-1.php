<?php

declare(strict_types=1);

final class TreeNode
{
    public function __construct(public int $val = 0, public ?TreeNode $left = null, public ?TreeNode $right = null) {}
}

/** @return list<int> */
function inorderTraversal(?TreeNode $root): array
{
    // TODO: hunter solves this (Interview Armor)
    return [];
}
