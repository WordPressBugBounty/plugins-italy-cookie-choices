<?php

declare (strict_types=1);
namespace ItalyCookieChoices\Vendor\ItalyStrap\Asset\Core;

use ItalyCookieChoices\Vendor\ItalyStrap\Asset\FileUrl;
use ItalyCookieChoices\Vendor\ItalyStrap\Asset\RelativePath;
use SplFileInfo;
/**
 * The URL of a file of a plugin, also when the plugin folder is a symlink.
 */
final readonly class PluginFileUrl implements FileUrl
{
    /**
     * @param SplFileInfo $pluginFile The main file of the plugin, new SplFileInfo(__FILE__).
     */
    public function __construct(private SplFileInfo $pluginFile)
    {
    }
    public function url(SplFileInfo $file): string
    {
        $relativePath = new RelativePath(new SplFileInfo($this->pluginFile->getPath()));
        return \plugins_url($relativePath->orFail($file), $this->pluginFile->getPathname());
    }
}
