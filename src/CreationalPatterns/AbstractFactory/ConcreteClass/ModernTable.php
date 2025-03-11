<?php

namespace DesignPatterns\CreationalPatterns\AbstractFactory\ConcreteClass;

use DesignPatterns\CreationalPatterns\AbstractFactory\Interfaces\Table;

class ModernTable implements Table
{
    public function getStyle(): string
    {
        return 'Modern Table';
    }
}
