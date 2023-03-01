<?php

namespace App\Products;

class CdProduct extends ShopProduct
{
    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        int|float $price,
        private int $playLength
    ) {
        parent::__construct($title, $firstName, $mainName, $price);
    }

    public function getPlayLength(): int
    {
        return $this->playLength;
    }

    public function getSummaryLine(): string
    {
        $base = parent::getSummaryLine();
        $base .= ": playing time - {$this->playLength}";

        return $base;
    }
}
