<?php

declare(strict_types=1);

final class AuthenticationManager
{
    public function __construct(private int $timeToLive)
    {
        // TODO: hunter solves this
    }

    public function generate(string $tokenId, int $currentTime): void
    {
        // TODO: hunter solves this
    }

    public function renew(string $tokenId, int $currentTime): void
    {
        // TODO: hunter solves this
    }

    public function countUnexpiredTokens(int $currentTime): int
    {
        // TODO: hunter solves this
        return 0;
    }
}