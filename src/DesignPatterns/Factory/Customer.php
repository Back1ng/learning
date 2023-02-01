<?php declare(strict_types=1);

namespace Back1ng\DesignPatterns\Factory;

use Back1ng\DesignPatterns\Factory\Enums\StatusEnum;
use Back1ng\DesignPatterns\Factory\ValueObjects\CreditLimit;
use Back1ng\DesignPatterns\Factory\ValueObjects\Name;

final class Customer
{
    private Name $name;

    private CreditLimit $creditLimit;

    private StatusEnum $status;

    public function getName(): Name
    {
        return $this->name;
    }

    public function setName(Name $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCreditLimit(): CreditLimit
    {
        return $this->creditLimit;
    }

    public function setCreditLimit(CreditLimit $creditLimit): self
    {
        $this->creditLimit = $creditLimit;

        return $this;
    }

    public function getStatus(): StatusEnum
    {
        return $this->status;
    }

    public function setStatus(StatusEnum $status): self
    {
        $this->status = $status;

        return $this;
    }
}