<?php

namespace App\GeneratingObjects;

class Minion extends Employee
{
    public function fire(): void
    {
        echo nl2br("{$this->name}: I'll clear my desk \n");
    }
}
