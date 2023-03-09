<?php

namespace App\Patterns\Decorator;

abstract class TileDecorator extends Tile
{
    public function __construct(protected Tile $tile)
    {
    }
}