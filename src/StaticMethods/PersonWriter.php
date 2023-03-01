<?php

namespace App\StaticMethods;

interface PersonWriter
{
    public function write(Person $person): void;
}