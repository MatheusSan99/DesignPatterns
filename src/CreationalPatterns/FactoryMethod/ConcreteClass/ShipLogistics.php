<?php

namespace DesignPatterns\CreationalPatterns\FactoryMethod\ConcreteClass;

use DesignPatterns\CreationalPatterns\FactoryMethod\AbstractClass\Logistics;
use DesignPatterns\CreationalPatterns\FactoryMethod\Interfaces\Transport;

class ShipLogistics extends Logistics
{
    public function createTransport(): Transport
    {
        return new Ship();
    }
}