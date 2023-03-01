<?php

namespace App\StaticMethods;

class ProcessSale
{
    private array $callbacks;

    public function registerCallback(callable $callback): void
    {
        $this->callbacks[] = $callback;
    }

    public function sale(Product $product): void
    {
        echo sprintf("%s: processing \n", $product->name);
        foreach ($this->callbacks as $callback) {
            call_user_func($callback, $product);
        }
    }
}
