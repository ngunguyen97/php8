<?php

namespace App\Products;

class BookProduct extends ShopProduct
{

    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float $price,
        private int $numPages
    ) {
        parent::__construct($title, $firstName, $mainName, $price);
    }

    public function getNumberPages(): int
    {
        return $this->numPages;
    }

    public function getSummaryLine(): string
    {
        $base = parent::getSummaryLine();
        $base .= ": page count - {$this->numPages}";

        return $base;
    }

    public function getPrice(): int|float
    {
        return $this->price;
    }
}
