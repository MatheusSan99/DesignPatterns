<?php

namespace DesignPatterns\CreationalPatterns\FactoryMethod\ConcreteClass;

use DesignPatterns\CreationalPatterns\FactoryMethod\Interfaces\Transport;

class Ship implements Transport
{ // Produto Concreto, implementação específica
    public function deliver(): string
    {
        return "Delivery by Ship.";
    }
}