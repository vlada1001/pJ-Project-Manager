<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class InitialsExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('initials', [$this, 'getInitials']),
        ];
    }

    /**
     * @param $firstName
     * @param $lastName
     * @return string
     */
    public function getInitials($firstName, $lastName): string
    {
        return $firstName[0] . $lastName[0];
    }
}
