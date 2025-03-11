<?php

namespace DesignPatterns\CreationalPatterns\FactoryMethod\AbstractClass;

use DesignPatterns\CreationalPatterns\FactoryMethod\Interfaces\Transport;

abstract class Logistics
{
    abstract public function createTransport(): Transport;

    public function planDelivery(): string
    {
        $transport = $this->createTransport();
        return $transport->deliver();
    }
}