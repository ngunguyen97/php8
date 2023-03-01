<?php

namespace App\OpenClosePrinciple;

use App\OpenClosePrinciple\Contracts\EncoderFactoryInterface;

class GenericEncoder
{
    private EncoderFactoryInterface $encoderFactory;

    public function __construct(
        EncoderFactoryInterface $encoderFactory
    ) {
        $this->encoderFactory = $encoderFactory;
    }

    public function encodeToFormat($data, string $format): string
    {
        return $this->encoderFactory
            ->createForFormat($format)
            ->encode($data)
        ;
    }
}
