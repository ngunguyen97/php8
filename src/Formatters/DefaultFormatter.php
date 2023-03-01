<?php

namespace App\Formatters;

use App\Contracts\Formatter;

class DefaultFormatter implements Formatter
{
    public function format(array $lines): string
    {
       return implode("\n         ", $lines);
    }
}