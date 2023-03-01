<?php

namespace App\Generator;

class EchoPoemGenerator extends PoemGenerator
{
    protected function parts(int $number): array
    {
        return array_reduce(
            parent::parts($number),
            fn (array $output, string $line) =>
            [...$output, "{$line} {$line}"],
            []
        );
    }
}