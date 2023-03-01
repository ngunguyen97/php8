<?php

namespace App\OpenClosePrinciple\Encoders;

use App\OpenClosePrinciple\Contracts\EncoderInterface;

class JsonEncoder implements EncoderInterface
{
    public function encode($data): string
    {
        $data = $this->prepareData($data);

        return json_encode($data);
    }

    private function prepareData($data): mixed
    {
        return $data;
    }
}
