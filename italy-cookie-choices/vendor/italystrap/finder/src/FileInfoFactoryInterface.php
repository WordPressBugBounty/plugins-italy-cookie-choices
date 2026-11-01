<?php

declare (strict_types=1);
namespace ItalyCookieChoices\Vendor\ItalyStrap\Finder;

interface FileInfoFactoryInterface
{
    /**
     * @param string $file Full path of a file to load
     * @return \SplFileInfo
     */
    public function make(string $file): \SplFileInfo;
}
