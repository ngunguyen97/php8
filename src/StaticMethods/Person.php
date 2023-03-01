<?php

namespace App\StaticMethods;

class Person
{
    public function output(PersonWriter $writer): void
    {
        $writer->write($this);
    }

    public function getName(): string
    {
        return 'Bob';
    }

    public function getAge(): int
    {
        return 44;
    }
}
