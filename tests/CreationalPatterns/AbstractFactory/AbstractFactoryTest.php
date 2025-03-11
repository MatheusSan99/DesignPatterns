<?php

namespace Tests\CreationalPatterns\AbstractFactory;

use DesignPatterns\CreationalPatterns\AbstractFactory\Factory\ModernFurnitureFactory;
use DesignPatterns\CreationalPatterns\AbstractFactory\Factory\VictorianFurnitureFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase 
{
    private ModernFurnitureFactory $ModernFurnitureFactory;
    private VictorianFurnitureFactory $VictorianFurnitureFactory;
    
    public function testMoveisModernos() 
    {
        $this->ModernFurnitureFactory = new ModernFurnitureFactory();
        $chair = $this->ModernFurnitureFactory->createChair();
        $table = $this->ModernFurnitureFactory->createTable();
        $sofa = $this->ModernFurnitureFactory->createSofa();
        $this->assertEquals('Modern Chair', $chair->getStyle());
        $this->assertEquals('Modern Table', $table->getStyle());
        $this->assertEquals('Modern Sofa', $sofa->getStyle());
        $this->assertInstanceOf(\DesignPatterns\CreationalPatterns\AbstractFactory\Interfaces\Chair::class, $chair);
        $this->assertInstanceOf(\DesignPatterns\CreationalPatterns\AbstractFactory\Interfaces\Table::class, $table);
        $this->assertInstanceOf(\DesignPatterns\CreationalPatterns\AbstractFactory\Interfaces\Sofa::class, $sofa);
        $this->assertInstanceOf(\DesignPatterns\CreationalPatterns\AbstractFactory\Factory\ModernFurnitureFactory::class, $this->ModernFurnitureFactory);
        $this->assertInstanceOf(\DesignPatterns\CreationalPatterns\AbstractFactory\ConcreteClass\ModernChair::class, $chair);
        $this->assertInstanceOf(\DesignPatterns\CreationalPatterns\AbstractFactory\ConcreteClass\ModernTable::class, $table);
        $this->assertInstanceOf(\DesignPatterns\CreationalPatterns\AbstractFactory\ConcreteClass\ModernSofa::class, $sofa);
    }

    public function testMoveisVitorianos() 
    {
        $this->VictorianFurnitureFactory = new VictorianFurnitureFactory();
        $chair = $this->VictorianFurnitureFactory->createChair();
        $table = $this->VictorianFurnitureFactory->createTable();
        $sofa = $this->VictorianFurnitureFactory->createSofa();
        $this->assertEquals('Victorian Chair', $chair->getStyle());
        $this->assertEquals('Victorian Table', $table->getStyle());
        $this->assertEquals('Victorian Sofa', $sofa->getStyle());
        $this->assertInstanceOf(\DesignPatterns\CreationalPatterns\AbstractFactory\Interfaces\Chair::class, $chair);
        $this->assertInstanceOf(\DesignPatterns\CreationalPatterns\AbstractFactory\Interfaces\Table::class, $table);
        $this->assertInstanceOf(\DesignPatterns\CreationalPatterns\AbstractFactory\Interfaces\Sofa::class, $sofa);
        $this->assertInstanceOf(\DesignPatterns\CreationalPatterns\AbstractFactory\Factory\VictorianFurnitureFactory::class, $this->VictorianFurnitureFactory);
        $this->assertInstanceOf(\DesignPatterns\CreationalPatterns\AbstractFactory\ConcreteClass\VictorianChair::class, $chair);
        $this->assertInstanceOf(\DesignPatterns\CreationalPatterns\AbstractFactory\ConcreteClass\VictorianTable::class, $table);
        $this->assertInstanceOf(\DesignPatterns\CreationalPatterns\AbstractFactory\ConcreteClass\VictorianSofa::class, $sofa);
    }
}