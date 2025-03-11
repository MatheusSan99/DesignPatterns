<?php

namespace DesignPatterns\BehavioralPatterns\ChainOfResponsability;

class Client
{
    public function run(): void
    {
        $handlerA = new ConcreteHandlerA();
        $handlerB = new ConcreteHandlerB();

        $handlerA->setNext($handlerB);

        $requests = ['A', 'B', 'C'];

        foreach ($requests as $request) {
            $result = $handlerA->handle($request);

            if ($result) {
                echo $result . "\n";
            } else {
                echo "No handler found for the request: $request.\n";
            }
        }
    }
}