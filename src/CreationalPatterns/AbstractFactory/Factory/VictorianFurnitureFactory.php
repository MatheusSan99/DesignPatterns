<?php

namespace DesignPatterns\CreationalPatterns\AbstractFactory\Factory;

use DesignPatterns\CreationalPatterns\AbstractFactory\ConcreteClass\VictorianChair;
use DesignPatterns\CreationalPatterns\AbstractFactory\ConcreteClass\VictorianTable;
use DesignPatterns\CreationalPatterns\AbstractFactory\ConcreteClass\VictorianSofa;

class VictorianFurnitureFactory 
{
    public function createChair() : VictorianChair
    {
        return new VictorianChair();
    }

    public function createTable() : VictorianTable
    {
        return new VictorianTable();
    }

    public function createSofa() : VictorianSofa
    {
        return new VictorianSofa();
    }
}
