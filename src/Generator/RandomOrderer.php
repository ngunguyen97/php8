<?php

namespace App\Generator;

use App\Contracts\Orderer;

class RandomOrderer implements Orderer
{

    public function order(array $data): array
    {
        shuffle($data);
        return $data;
    }
}