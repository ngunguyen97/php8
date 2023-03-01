<?php

namespace App\Products;

abstract class ShopProductWriter
{
    protected array $products = [];

    public function addProduct(ShopProduct $shopProduct): void
    {
        $this->products[] = $shopProduct;
    }

//    public function write(): void
//    {
//        $str = '';
//        foreach ($this->products as $product) {
//            $str .= "{$product->title}";
//            $str .= $product->getProducer();
//            $str .= " ({$product->getPrice()})\n";
//        }
//
//        echo $str;
//    }
    abstract public function write(): void;
}
