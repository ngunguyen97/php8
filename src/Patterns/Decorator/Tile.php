<?php

namespace App\Patterns\Decorator;

abstract class Tile
{
    abstract public function getWealthFactor(): int;
}