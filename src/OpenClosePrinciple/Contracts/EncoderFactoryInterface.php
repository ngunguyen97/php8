<?php

namespace App\OpenClosePrinciple\Contracts;

interface EncoderFactoryInterface
{
    public function createForFormat(string $format): EncoderInterface;
}