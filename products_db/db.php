<?php

require_once __DIR__ . "/classes/product.php";
require_once __DIR__ . "/classes/food.php";
require_once __DIR__ . "/classes/petsbed.php";
require_once __DIR__ . "/classes/category.php";
require_once __DIR__ . "/classes/game.php";

$dog = new Category("cane");
$cat = new Category("gatto");

$products = [
    new Food("Crocchette Vegane", 1, 6.50, $dog, "vegetale", "pasto"),
    new Food("Crocchette Pesce", 2, 8.50, $cat, "pesce", "pasto"),
    new Petsbed("Cuccia Grande Cane", 3, 30.00, $cat, 1.5),
    new Petsbed("Cuccia piccola Gatto", 4, 26.00, $cat, 0.8),
    new Game("Frisbee", 5, 7.50, $dog, "plastica"),
    new Game("Osso", 6, 9.50, $dog, "gomma"),

];