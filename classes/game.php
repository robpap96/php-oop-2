<?php

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Category.php";
require_once __DIR__ . "/../traits/Material.php";


class Game extends Product {
    use Material;

    public function __costruct(string $_name, int $_id, float $_price, Category $_category, string $_image, string $_material) {
        parent::__construct($_name, $_id, $_price, $_category, $_image);
        $this->material = $_material;

    }
};