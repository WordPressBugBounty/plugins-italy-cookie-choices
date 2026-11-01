<?php

declare (strict_types=1);
namespace ItalyCookieChoices\Vendor\ItalyStrap\Finder;

/**
 * Class FinderFactory
 * @package ItalyStrap\Finder
 */
class FinderFactory
{
    public function make(): FinderInterface
    {
        return new Finder(new FilesHierarchyIterator(new FileInfoFactory()));
    }
}
