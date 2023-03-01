<?php

namespace App\Formatters;

class EchoFormatter implements \App\Contracts\Formatter
{

    public function format(array $lines): string
    {
        $lines = array_reduce(
            $lines,
            fn (array $output, string $line) => [...$output, "{$line} {$line}"],
            []
        );

        return implode("\n    ", $lines);
    }
}