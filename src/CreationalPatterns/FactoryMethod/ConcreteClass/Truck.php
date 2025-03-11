<?php

namespace DesignPatterns\CreationalPatterns\FactoryMethod\ConcreteClass;

use DesignPatterns\CreationalPatterns\FactoryMethod\Interfaces\Transport;

class Truck implements Transport
{ // Produto Concreto, implementação específica
    public function deliver(): string
    {
        return "Delivery by Truck.";
    }
}