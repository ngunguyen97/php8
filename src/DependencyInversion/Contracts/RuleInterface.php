<?php

namespace App\DependencyInversion\Contracts;

interface RuleInterface
{
    public function matches($number): bool;
    public function getReplacement(): string;
}