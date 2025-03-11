<?php

namespace DesignPatterns\CreationalPatterns\AbstractFactory\ConcreteClass;

use DesignPatterns\CreationalPatterns\AbstractFactory\Interfaces\Table;

class VictorianTable implements Table
{
    public function getStyle(): string
    {
        return 'Victorian Table';
    }
}
