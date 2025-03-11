<?php

namespace DesignPatterns\CreationalPatterns\AbstractFactory\ConcreteClass;

use DesignPatterns\CreationalPatterns\AbstractFactory\Interfaces\Sofa;

class VictorianSofa implements Sofa
{
    public function getStyle(): string
    {
        return 'Victorian Sofa';
    }
}
