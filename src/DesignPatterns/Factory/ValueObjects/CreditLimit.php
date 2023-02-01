<?php declare(strict_types=1);

namespace Back1ng\DesignPatterns\Factory\ValueObjects;

final class CreditLimit
{
    public function __construct(
        private readonly int $creditLimit,
    ) {}

    public static function from(int $creditLimit): self
    {
        return new self($creditLimit);
    }

    public function getValue(): int
    {
        return $this->creditLimit;
    }
}