<?php

namespace Back1ng\DesignPatterns\Factory;

class CustomerFactory
{
    public function create(string $name): Customer
    {
        $customer = new Customer();

        $customer->setName($name);
        $customer->setCreditLimit(0);
        $customer->setStatus('pending');

        return $customer;
    }
}