<?php

declare (strict_types=1);
namespace ItalyCookieChoices\Vendor\ItalyStrap\Event;

final class NullState implements StateInterface
{
    public function forEvent(object $event, \ItalyCookieChoices\Vendor\Psr\EventDispatcher\EventDispatcherInterface $provider): void
    {
    }
    public function progress(string $state, \ItalyCookieChoices\Vendor\Psr\EventDispatcher\EventDispatcherInterface $provider): void
    {
    }
    public function currentEventName(): string
    {
        return '';
    }
    public function isDispatching(): bool
    {
        return \false;
    }
    public function dispatchedEventCount(): int
    {
        return 0;
    }
}
