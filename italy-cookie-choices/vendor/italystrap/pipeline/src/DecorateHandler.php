<?php

declare (strict_types=1);
namespace ItalyCookieChoices\Vendor\ItalyStrap\Pipeline;

final readonly class DecorateHandler implements HandlerInterface
{
    public function __construct(private MiddlewareInterface $middleware, private HandlerInterface $nextHandler)
    {
    }
    public function handle(object $message): mixed
    {
        return $this->middleware->process($message, $this->nextHandler);
    }
}
