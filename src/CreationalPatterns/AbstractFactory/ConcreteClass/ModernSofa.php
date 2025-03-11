<?php

namespace DesignPatterns\CreationalPatterns\AbstractFactory\ConcreteClass;

use DesignPatterns\CreationalPatterns\AbstractFactory\Interfaces\Sofa;

class ModernSofa implements Sofa
{
    public function getStyle(): string
    {
        return 'Modern Sofa';
    }
}
