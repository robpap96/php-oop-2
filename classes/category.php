<?php 

class Category {

    public $pet;
    public $icon;

    function __construct(string $_pet, string $_icon) {
        $this->pet = $_pet;
        $this->icon = $_icon;
    }
}