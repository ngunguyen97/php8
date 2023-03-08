<?php

namespace App\Patterns\Composite;

abstract class Unit
{
    /**
     * @throws \App\Patterns\Composite\UnitException
     */
    public function addUnit(Unit $unit): void
    {
        throw new UnitException(get_class($this).'is a leaf');
    }

    /**
     * @throws \App\Patterns\Composite\UnitException
     */
    public function removeUnit(Unit $unit): void
    {
        throw new UnitException(get_class($this).'is a leaf');
    }
    abstract public function bombardStrength(): int;
}