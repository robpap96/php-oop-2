<?php

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Category.php";
require_once __DIR__ . "/../traits/Material.php";

class Petsbed extends Product {
    use Material;

    public $size;

    public function __costruct(string $_name, int $_id, float $_price, Category $_category, string $_image, float $_size, string $_material) {
        parent::__construct($_name, $_id, $_price, $_category, $_image);
        $this->size = $_size;
        $this->material = $_material;

    }
};