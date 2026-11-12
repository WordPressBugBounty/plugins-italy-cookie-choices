<?php

declare (strict_types=1);
namespace ItalyCookieChoices\Vendor\ItalyStrap\Asset;

/**
 * The asset is always enqueued.
 */
final readonly class Always implements Condition
{
    public function isSatisfied(): bool
    {
        return \true;
    }
}
