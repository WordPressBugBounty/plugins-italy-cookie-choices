<?php

declare (strict_types=1);
namespace ItalyCookieChoices\Vendor\ItalyStrap\Finder;

class FileInfoFactory implements FileInfoFactoryInterface
{
    /**
     * @inheritDoc
     */
    public function make(string $file): \SplFileInfo
    {
        return new \SplFileInfo($file);
    }
}
