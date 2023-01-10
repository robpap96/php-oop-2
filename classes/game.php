<?php

require_once __DIR__ . "/product.php";

class Game extends Product {
    public $material;


    function __costruct(string $name, int $id, float $price, string $category, float $material) {
        parent::__construct($name, $id, $price, $category);
        $this->material = $material;

    }
};