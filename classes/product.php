<?php

require_once __DIR__ . "/category.php";

class Product {
    public $name;
    public $id;
    public $price;
    public $category;

    function __construct(string $name, int $id, float $price, string $category) {
        $this->name = $name;
        $this->id = $id;
        $this->price = $price;
        $this->category = $category;
    }
    
    
}
