<?php

namespace App\Products;

class ShopProduct
{
    private int|float $discount = 0;

    public function __construct(
        private string $title,
        public string $firstName,
        public string $mainName,
        protected int|float $price
    ) {
    }

    public function getProducerFirstName(): string
    {
        return $this->firstName;
    }

    public function getProducerMainName(): string
    {
        return $this->mainName;
    }

    public function setDiscount(int $discount): void
    {
        $this->discount = $discount;
    }

    public function getDiscount(): int
    {
        return $this->discount;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPrice(): int|float
    {
        return $this->price - $this->discount;
    }

    public function getProducer(): string
    {
        return $this->firstName.' '.$this->mainName;
    }

    public function getSummaryLine(): string
    {
        $base = "{$this->title} ( {$this->mainName}, ";
        $base .= "{$this->firstName} )";

        return $base;
    }
}
