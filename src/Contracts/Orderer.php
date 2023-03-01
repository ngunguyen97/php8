<?php

namespace App\Contracts;

interface Orderer
{
    public function order(array $data): array;
}