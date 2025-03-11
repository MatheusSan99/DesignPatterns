<?php

namespace DesignPatterns\CreationalPatterns\FactoryMethod\Interfaces;

interface Transport
{ // Interface que define o tipo de objeto que o factory method vai criar
    public function deliver(): string;
}