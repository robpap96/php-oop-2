<?php

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Category.php";


class Game extends Product {
    public $material;


    public function __costruct(string $_name, int $_id, float $_price, Category $_category, string $_material) {
        parent::__construct($_name, $_id, $_price, $_category);
        $this->material = $_material;

    }
};