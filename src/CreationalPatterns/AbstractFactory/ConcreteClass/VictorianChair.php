<?php

namespace DesignPatterns\CreationalPatterns\AbstractFactory\ConcreteClass;

use DesignPatterns\CreationalPatterns\AbstractFactory\Interfaces\Chair;

class VictorianChair implements Chair
{
    public function getStyle(): string
    {
        return 'Victorian Chair';
    }
}
