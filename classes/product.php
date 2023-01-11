<?php

require_once __DIR__ . "/Category.php";

class Product {
    public $name;
    public $id;
    public $price;
    public $category;

    public function __construct(string $_name, int $_id, float $_price, Category $_category) {
        $this->name = $_name;
        $this->id = $_id;
        $this->price = $_price;
        $this->category = $_category;
    }
    
    
}
