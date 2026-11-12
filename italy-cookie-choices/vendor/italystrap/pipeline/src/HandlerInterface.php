<?php

declare (strict_types=1);
namespace ItalyCookieChoices\Vendor\ItalyStrap\Pipeline;

interface HandlerInterface
{
    public function handle(object $message): mixed;
}
