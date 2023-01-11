<?php

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Category.php";


class Petsbed extends Product {
    public $size;

    public function __costruct(string $_name, int $_id, float $_price, Category $_category, float $_size) {
        parent::__construct($_name, $_id, $_price, $_category);
        $this->size = $_size;

    }
};