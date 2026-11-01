<?php

declare (strict_types=1);
namespace ItalyCookieChoices\Vendor\ItalyStrap\Event;

trait PropagationAwareTrait
{
    private bool $stopPropagation = \false;
    public function isPropagationStopped(): bool
    {
        return $this->stopPropagation;
    }
    public function stopPropagation(): void
    {
        $this->stopPropagation = \true;
    }
}
