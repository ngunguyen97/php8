<?php

namespace App\Contracts;

interface Formatter
{
    public function format(array $lines): string;
}