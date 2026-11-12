<?php

declare (strict_types=1);
namespace ItalyCookieChoices\Vendor\ItalyStrap\Asset\Core;

use ItalyCookieChoices\Vendor\ItalyStrap\Asset\FileUrl;
use ItalyCookieChoices\Vendor\ItalyStrap\Asset\FolderUrls;
use SplFileInfo;
/**
 * The URL of a file of the active theme, the child theme or its parent.
 */
final readonly class ThemeFileUrl implements FileUrl
{
    public function url(SplFileInfo $file): string
    {
        return (new FolderUrls([\get_stylesheet_directory() => \get_stylesheet_directory_uri(), \get_template_directory() => \get_template_directory_uri()]))->url($file);
    }
}
