<?php

namespace DesignPatterns\BehavioralPatterns\ChainOfResponsability;

class ConcreteHandlerA extends BaseHandler
{
    public function handle(string $request): ?string
    {
        if ($request === 'A') {
            return 'ConcreteHandlerA: I can handle this request.';
        } else {
            return parent::handle($request);
        }
    }
}