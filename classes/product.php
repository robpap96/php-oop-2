<?php

require_once __DIR__ . "/Category.php";

class Product {
    public $name;
    public $id;
    public $image;
    public $price;
    public $category;

    public function __construct(string $_name, int $_id, float $_price, Category $_category, string $_image ) {
        $this->name = $_name;
        $this->id = $_id;
        $this->price = $_price;
        $this->category = $_category;
        $this->image = $_image;
    }
    
    
}
