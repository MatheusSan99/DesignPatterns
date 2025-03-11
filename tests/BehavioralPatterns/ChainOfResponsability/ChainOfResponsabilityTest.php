<?php

namespace Tests\BehavioralPatterns\ChainOfResponsability;

use DesignPatterns\BehavioralPatterns\ChainOfResponsability\Client;

class ChainOfResponsabilityTest extends \PHPUnit\Framework\TestCase
{
    public function testCanHandleRequest(): void
    {
        $client = new Client();
        $client->run();

        $this->expectOutputString("ConcreteHandlerA: I can handle this request.\nConcreteHandlerB: I can handle this request.\nNo handler found for the request: C.\n");
    }
}