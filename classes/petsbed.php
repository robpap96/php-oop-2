<?php

require_once __DIR__ . "/product.php";

class Petsbed extends Product {
    public $size;

    function __costruct(string $name, int $id, float $price, string $category, float $size) {
        parent::__construct($name, $id, $price, $category);
        $this->size = $size;

    }
};