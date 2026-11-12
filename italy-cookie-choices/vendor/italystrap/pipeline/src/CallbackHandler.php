<?php

declare (strict_types=1);
namespace ItalyCookieChoices\Vendor\ItalyStrap\Pipeline;

final class CallbackHandler implements HandlerInterface
{
    /**
     * @var callable
     */
    private $callback;
    public function __construct(callable $callback)
    {
        $this->callback = $callback;
    }
    public function handle(object $message): mixed
    {
        return ($this->callback)($message);
    }
}
