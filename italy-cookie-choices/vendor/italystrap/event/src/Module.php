<?php

declare (strict_types=1);
namespace ItalyCookieChoices\Vendor\ItalyStrap\Event;

use ItalyCookieChoices\Vendor\Psr\EventDispatcher\ListenerProviderInterface;
/**
 * @psalm-api
 */
final class Module
{
    /** @return array{'aliases':array<class-string, class-string>, 'sharing':list<class-string>} */
    public function __invoke(): array
    {
        return ['aliases' => [
            // Global
            GlobalDispatcherInterface::class => GlobalDispatcher::class,
            SubscriberRegisterInterface::class => SubscriberRegister::class,
            // PSR-14
            \ItalyCookieChoices\Vendor\Psr\EventDispatcher\EventDispatcherInterface::class => Dispatcher::class,
            ListenerProviderInterface::class => GlobalOrderedListenerProvider::class,
            ListenerRegisterInterface::class => GlobalOrderedListenerProvider::class,
            StateInterface::class => GlobalState::class,
        ], 'sharing' => [
            // Global
            GlobalDispatcher::class,
            SubscriberRegister::class,
            // PSR-14
            Dispatcher::class,
            GlobalOrderedListenerProvider::class,
            GlobalState::class,
        ]];
    }
}
