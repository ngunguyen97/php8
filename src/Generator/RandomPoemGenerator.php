<?php

namespace App\Generator;

class RandomPoemGenerator extends PoemGenerator
{
    protected function data(): array
    {
        $data = parent::data();

        shuffle($data);

        return $data;
    }
}