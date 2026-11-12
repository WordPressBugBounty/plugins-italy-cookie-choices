<?php

declare (strict_types=1);
namespace ItalyCookieChoices\Vendor\ItalyStrap\Asset;

/**
 * No version in the URL, for the external URLs the version would break.
 */
final readonly class NoVersion implements Version
{
    public function value(): null
    {
        return null;
    }
}
