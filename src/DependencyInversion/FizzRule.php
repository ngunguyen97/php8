<?php

namespace App\DependencyInversion;

use App\DependencyInversion\Contracts\RuleInterface;

class FizzRule implements RuleInterface
{
    public function matches($number): bool
    {
        return 0 === $number % 3;
    }

    public function getReplacement(): string
    {
        return 'Fizz';
    }
}
