<?php

namespace App\Generator;

use App\Contracts\Orderer;

class SequentialOrderer implements Orderer
{

    public function order(array $data): array
    {
        return $data;
    }
}