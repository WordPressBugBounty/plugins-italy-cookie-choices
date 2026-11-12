<?php

declare (strict_types=1);
namespace ItalyCookieChoices\Vendor\ItalyStrap\Asset;

/**
 * The asset is only registered, for a dependency of other assets or a script printed by its own call.
 */
final readonly class RegisterOnly implements Condition
{
    public function isSatisfied(): bool
    {
        return \false;
    }
}
