<?php declare(strict_types=1);

namespace Back1ng\DesignPatterns\Factory;

use Back1ng\DesignPatterns\Factory\Enums\StatusEnum;
use Back1ng\DesignPatterns\Factory\ValueObjects\CreditLimit;
use Back1ng\DesignPatterns\Factory\ValueObjects\Name;

final class CustomerFactory
{
    public function create(string $name): Customer
    {
        $customer = new Customer();

        $customer->setName(Name::from($name));
        $customer->setCreditLimit(CreditLimit::from(0));
        $customer->setStatus(StatusEnum::from('pending'));

        return $customer;
    }
}