<?php

namespace Back1ng\DesignPatterns\Factory;

class Customer
{
    private string $name;

    private int $creditLimit;

    private string $status;

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function setCreditLimit(int $creditLimit): self
    {
        $this->creditLimit = $creditLimit;

        return $this;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}