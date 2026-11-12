<?php

declare (strict_types=1);
namespace ItalyCookieChoices\Vendor\ItalyStrap\Pipeline;

final class Pipeline implements HandlerInterface
{
    /**
     * @var array<int|string, MiddlewareInterface>
     */
    private array $middleware;
    private bool $handled = \false;
    public function __construct(private readonly HandlerInterface $handler = new NoHandlerProvided(), MiddlewareInterface ...$middleware)
    {
        $this->middleware = $middleware;
    }
    public function handle(object $message): mixed
    {
        if ($this->handled) {
            throw new \RuntimeException('This pipeline instance has already been dispatched');
        }
        $this->handled = \true;
        return $this->next($message);
    }
    private function next(object $message): mixed
    {
        if ($this->middleware === []) {
            return $this->handler->handle($message);
        }
        /** @var MiddlewareInterface $middleware */
        $middleware = \array_shift($this->middleware);
        return $middleware->process($message, new CallbackHandler($this->next(...)));
    }
}
