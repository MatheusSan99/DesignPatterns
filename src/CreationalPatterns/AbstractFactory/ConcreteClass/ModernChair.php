<?php

namespace DesignPatterns\CreationalPatterns\AbstractFactory\ConcreteClass;

use DesignPatterns\CreationalPatterns\AbstractFactory\Interfaces\Chair;

class ModernChair implements Chair
{
    public function getStyle(): string
    {
        return 'Modern Chair';
    }
}
