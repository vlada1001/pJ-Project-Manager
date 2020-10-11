<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class BoolExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('bool_translate', [$this, 'boolTranslate']),
        ];
    }

    /**
     * @param boolean $value
     * @return string
     */
    public function boolTranslate(bool $value): string
    {
        return ($value) ? 'Završeno' : 'Nezavršeno';
    }
}
