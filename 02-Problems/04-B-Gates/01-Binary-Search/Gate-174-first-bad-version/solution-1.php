<?php

declare(strict_types=1);

/**
 * API stub — in real use this is provided; keep the binary-search logic in firstBadVersion.
 */
function isBadVersion(int $version): bool
{
    // placeholder for local experiments — hunter should not rely on this body in the Gate clear
    return $version >= 4;
}

function firstBadVersion(int $n): int
{
    // TODO: hunter solves this (call isBadVersion)
    return 1;
}