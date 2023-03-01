<?php

namespace App\StaticMethods;

class Totalizer
{
    public static function warnAmount(): callable
    {
        return function (Product $product) {
            if ($product->price > 5) {
                echo sprintf("  reached high price: %s\n", $product->price);
            }
        };
    }
}
