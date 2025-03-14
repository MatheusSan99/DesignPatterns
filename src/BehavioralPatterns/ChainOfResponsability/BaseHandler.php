<?php

namespace DesignPatterns\BehavioralPatterns\ChainOfResponsability;

class BaseHandler implements Handler
{
    private Handler $nextHandler;

    public function setNext(Handler $handler): Handler
    {
        $this->nextHandler = $handler;

        return $handler;
    }

    public function handle(string $request): ?string
    {
        if (isset($this->nextHandler)) {
            return $this->nextHandler->handle($request);
        }

        return null;
    }
}