<?php

declare (strict_types=1);
namespace ItalyCookieChoices\Vendor\ItalyStrap\Empress;

use ItalyCookieChoices\Vendor\ItalyStrap\Finder\FinderInterface;
final class PhpFileProvider
{
    private string $pattern;
    private FinderInterface $finder;
    /**
     * @param string $pattern A glob pattern by which to look up config files.
     */
    public function __construct(string $pattern, FinderInterface $finder)
    {
        $this->pattern = $pattern;
        $this->finder = $finder;
    }
    public function __invoke(): \Generator
    {
        $this->finder->names([$this->pattern]);
        /**
         * @var \SplFileInfo $file
         */
        foreach ($this->finder as $file) {
            yield include $file;
        }
    }
}
