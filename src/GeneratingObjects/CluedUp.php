<?php

namespace App\GeneratingObjects;

class CluedUp extends Employee
{
    public function fire(): void
    {
        echo nl2br("{$this->name}: I'll call my lawyer\n");
    }
}
