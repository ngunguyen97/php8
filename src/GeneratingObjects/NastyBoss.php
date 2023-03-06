<?php

namespace App\GeneratingObjects;

class NastyBoss
{
    private array $employees = [];
    public function addEmployee(Employee $employeeName): void
    {
        $this->employees[] = $employeeName;
    }

    public function projectFail(): void
    {
        if (count($this->employees)) {
            $emp = array_pop($this->employees);
            $emp->fire();
        }
    }
}
