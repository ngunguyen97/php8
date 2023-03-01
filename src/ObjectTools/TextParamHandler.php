<?php

namespace App\ObjectTools;

class TextParamHandler extends ParamHandler
{
    public function write(): void
    {
        echo 'write';
    }

    public function read(): void
    {
        echo 'read';
    }
}
