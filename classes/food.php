<?php

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Category.php";


class Food extends Product {
    public $meat;
    public $typeofmeal;

    public function __construct(string $_name, int $_id, float $_price, Category $_category, string $_image, string $_meat, string $_typeofmeal) {
        parent::__construct($_name, $_id, $_price, $_category, $_image);
        $this->meat = $_meat;
        $this->typeofmeal = $_typeofmeal;

    }
};