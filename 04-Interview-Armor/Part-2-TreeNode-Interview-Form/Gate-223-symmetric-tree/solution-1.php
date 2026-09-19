<?php

declare(strict_types=1);

final class TreeNode
{
    public function __construct(
        public int $val = 0,
        public ?TreeNode $left = null,
        public ?TreeNode $right = null,
    ) {
    }
}

function isSymmetric(?TreeNode $root): bool
{
    // TODO: hunter solves this (Interview Armor)
    return false;
}
