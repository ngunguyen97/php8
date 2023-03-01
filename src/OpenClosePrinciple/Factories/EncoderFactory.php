<?php

namespace App\OpenClosePrinciple\Factories;

use App\OpenClosePrinciple\Contracts\EncoderFactoryInterface;
use App\OpenClosePrinciple\Contracts\EncoderInterface;

class EncoderFactory implements EncoderFactoryInterface
{
    private array $factories = [];

    public function createForFormat(
        string $format
    ): EncoderInterface {
        $factory = $this->factories[$format];

        // the factory is a callable.
        return $factory();
    }

    public function addEncoderFactory(
        string $format,
        callable $factory
    ) {
        $this->factories[$format] = $factory;
    }
}
