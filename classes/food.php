<?php

require_once __DIR__ . "/product.php";

class Food extends Product {
    public $meat;
    public $typeofmeal;

    function __construct(string $name, int $id, float $price, string $category, string $meat, string $typeofmeal) {
        parent::__construct($name, $id, $price, $category);
        $this->meat = $meat;
        $this->typeofmeal = $typeofmeal;

    }
};