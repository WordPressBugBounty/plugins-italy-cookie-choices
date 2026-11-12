<?php

declare (strict_types=1);
namespace ItalyCookieChoices\Vendor\ItalyStrap\Pipeline;

final class NoHandlerProvided implements HandlerInterface
{
    public function handle(object $message): mixed
    {
        throw new \RuntimeException('No handler provided for this message');
    }
}
