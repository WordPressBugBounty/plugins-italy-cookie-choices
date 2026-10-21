<?php

declare (strict_types=1);
namespace ItalyCookieChoices\Vendor\ItalyStrap\Storage;

trait NormalizeTtlTrait
{
    /**
     * @param int|null $ttl
     * @return int
     */
    private function parseTtl(?int $ttl): int
    {
        if (\is_null($ttl)) {
            $ttl = 31536001;
            // 1 year
        }
        if ($ttl === 0) {
            --$ttl;
            // 0 means the value is expired
        }
        return $ttl;
    }
}
