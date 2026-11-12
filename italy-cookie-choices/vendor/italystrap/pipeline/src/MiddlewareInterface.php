<?php

declare (strict_types=1);
namespace ItalyCookieChoices\Vendor\ItalyStrap\Pipeline;

interface MiddlewareInterface
{
    public function process(object $message, HandlerInterface $handler): mixed;
}
