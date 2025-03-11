<?php

namespace DesignPatterns\BehavioralPatterns\ChainOfResponsability;

class ConcreteHandlerB extends BaseHandler
{
    public function handle(string $request): ?string
    {
        if ($request === 'B') {
            return 'ConcreteHandlerB: I can handle this request.';
        } else {
            return parent::handle($request);
        }
    }
}