<?php

declare (strict_types=1);
namespace ItalyCookieChoices\Vendor\ItalyStrap\Event;

use ItalyCookieChoices\Vendor\Psr\EventDispatcher\EventDispatcherInterface;
use ItalyCookieChoices\Vendor\Psr\EventDispatcher\ListenerProviderInterface;
use ItalyCookieChoices\Vendor\Psr\EventDispatcher\StoppableEventInterface;
/**
 * @psalm-api
 */
final class Dispatcher implements EventDispatcherInterface
{
    private ListenerProviderInterface $listenerProvider;
    private StateInterface $state;
    public function __construct(ListenerProviderInterface $listenerProvider, ?StateInterface $state = null)
    {
        $this->listenerProvider = $listenerProvider;
        $this->state = $state ?? new NullState();
    }
    public function dispatch(object $event): object
    {
        $this->state->forEvent($event, $this);
        $this->state->progress(StateInterface::BEFORE, $this);
        /** @var callable $listener */
        foreach ($this->listenerProvider->getListenersForEvent($event) as $listener) {
            if ($event instanceof StoppableEventInterface && $event->isPropagationStopped()) {
                break;
            }
            $listener($event);
        }
        $this->state->progress(StateInterface::AFTER, $this);
        return $event;
    }
}
