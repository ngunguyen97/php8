<?php

namespace App\GeneratingObjects;

abstract class ApptEncoder
{
    abstract public function encode(): string;
}