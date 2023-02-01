<?php declare(strict_types=1);

namespace Back1ng\DesignPatterns\Factory\ValueObjects;

final class Name implements \Stringable
{
    public function __construct(
        private readonly string $name,
    ) {}

    public function getValue(): string
    {
        return $this->name;
    }

    public function __toString(): string
    {
        return $this->name;
    }
}