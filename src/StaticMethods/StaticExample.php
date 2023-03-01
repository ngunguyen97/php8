<?php

namespace App\StaticMethods;

class StaticExample
{
    public static int $aNum = 0;

    public static function sayHello(): void
    {
        self::$aNum;
        echo sprintf("hello (%d) \n", self::$aNum);
    }

    public function sayBye(): void
    {
        echo 'Goodbye bye!!!';
    }
}
