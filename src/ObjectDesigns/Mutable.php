<?php

namespace App\ObjectDesigns;

class Mutable
{
    private int $someNumber = 5;

    public function __construct(int $initialNumber)
    {
        $this->someNumber = $initialNumber;
    }

    public function increase(): void
    {
        $this->someNumber = $this->someNumber + 1;
    }

    public function getSomeNumber(): int
    {
        return $this->someNumber;
    }
}