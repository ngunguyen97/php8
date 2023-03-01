<?php

namespace App\StaticMethods;

class Mailer
{
    public function doMail(Product $product): void
    {
        echo sprintf("  mailing (%s)\n", $product->name);
    }
}
