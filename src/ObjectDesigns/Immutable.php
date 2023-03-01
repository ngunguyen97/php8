<?php

namespace App\ObjectDesigns;

class Immutable
{
    private int $someNumber;

    public function __construct(int $initialNumber)
    {
        $this->someNumber = $initialNumber;
    }

    public function increase(): Immutable
    {
        return new Immutable($this->someNumber + 1);
    }

    public function getSomeNumber(): int
    {
        return $this->someNumber;
    }
}