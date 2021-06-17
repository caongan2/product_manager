<?php


namespace Services;


class ProductManager
{
    public array $products;

    public function __construct()
    {
        $this->products = [];
    }

    public function addProduct($product): void
    {
        array_push($this->products, $product);
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }
}