<?php

declare (strict_types=1);
namespace ItalyCookieChoices\Vendor\ItalyStrap\Empress;

use ItalyCookieChoices\Vendor\Psr\Container\NotFoundExceptionInterface;
final class NotFoundException extends ContainerException implements NotFoundExceptionInterface
{
}
