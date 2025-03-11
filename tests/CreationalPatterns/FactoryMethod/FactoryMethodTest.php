<?php

namespace Tests\CreationalPatterns\FactoryMethod;

use DesignPatterns\CreationalPatterns\FactoryMethod\ConcreteClass\ShipLogistics;
use DesignPatterns\CreationalPatterns\FactoryMethod\ConcreteClass\TruckLogistics;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase 
{
    public function testTruckLogistics()
    {
        $truckLogistics = new TruckLogistics();
        $this->assertEquals("Delivery by Truck.", $truckLogistics->planDelivery());
    }

    public function testShipLogistics()
    {
        $shipLogistics = new ShipLogistics();
        $this->assertEquals("Delivery by Ship.", $shipLogistics->planDelivery());
    }
}