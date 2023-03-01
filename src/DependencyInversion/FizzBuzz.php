<?php

namespace App\DependencyInversion;

use App\DependencyInversion\Contracts\RuleInterface;

class FizzBuzz
{
    private array $rules = [];

    public function addRule(RuleInterface $rule): void
    {
        $this->rules[] = $rule;
    }

    public function generateList(int $number): string
    {
        foreach ($this->rules as $rule) {
            if ($rule->matches($number)) {
                return $rule->getReplacement();
            }
        }

        return (string) $number;
    }

    private function generateElement(mixed $number): string
    {
        $fizzBuzzRule = new FizzBuzzRule();
        if ($fizzBuzzRule->matches($number)) {
            return $fizzBuzzRule->getReplacement();
        }

        $fizzRule = new FizzRule();
        if ($fizzRule->matches($number)) {
            return $fizzRule->getReplacement();
        }

        $buzzRule = new BuzzRule();
        if ($buzzRule->matches($number)) {
            return $buzzRule->getReplacement();
        }

        return (string) $number;
    }
}
