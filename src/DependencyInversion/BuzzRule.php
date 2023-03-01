<?php

namespace App\DependencyInversion;

use App\DependencyInversion\Contracts\RuleInterface;

class BuzzRule implements RuleInterface
{
    public function matches($number): bool
    {
        return 0 === $number % 5;
    }

    public function getReplacement(): string
    {
        return 'Buzz';
    }
}
