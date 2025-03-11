<?php

namespace DesignPatterns\CreationalPatterns\AbstractFactory\Factory;

use DesignPatterns\CreationalPatterns\AbstractFactory\ConcreteClass\ModernChair;
use DesignPatterns\CreationalPatterns\AbstractFactory\ConcreteClass\ModernTable;
use DesignPatterns\CreationalPatterns\AbstractFactory\ConcreteClass\ModernSofa;

class ModernFurnitureFactory 
{
    public function createSofa() : ModernSofa {
        return new ModernSofa();
    }

    public function createTable() : ModernTable {
        return new ModernTable();
    }

    public function createChair() : ModernChair {
        return new ModernChair();
    }
}
