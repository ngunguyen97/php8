<?php

namespace App\DependencyInversion;

use App\DependencyInversion\Contracts\RuleInterface;

class FizzBuzzRule implements RuleInterface
{
    public function matches($number): bool
    {
        return 0 === $number % 3 && 0 === $number % 5;
    }

    public function getReplacement(): string
    {
        return 'FizzBuzz';
    }
}
