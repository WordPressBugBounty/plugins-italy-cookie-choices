<?php

declare (strict_types=1);
namespace ItalyCookieChoices\Vendor\ItalyStrap\Asset;

/**
 * The version of the core, the default of the register functions.
 */
final readonly class CoreVersion implements Version
{
    public function value(): false
    {
        return \false;
    }
}
