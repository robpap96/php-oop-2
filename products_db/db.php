<?php

require_once __DIR__ . "/../classes/Product.php";
require_once __DIR__ . "/../classes/Food.php";
require_once __DIR__ . "/../classes/Petsbed.php";
require_once __DIR__ . "/../classes/Category.php";
require_once __DIR__ . "/../classes/Game.php";

$dog = new Category("cane");
$cat = new Category("gatto");

$crocchetteCaneVegane = new Food("Crocchette Vegane", 1, 6.50, $dog, "vegetale", "pasto");
$crocchetteGattoPesce = new Food("Crocchette Pesce", 2, 8.50, $cat, "pesce", "pasto");
$cucciaCaneGrande = new Petsbed("Cuccia Grande Cane", 3, 30.00, $cat, 1.5);
$cucciaGattoPiccola = new Petsbed("Cuccia piccola Gatto", 4, 26.00, $cat, 0.8);
$frisbeeCane = new Game("Frisbee", 5, 7.50, $dog, "plastica");
$ossoCane = new Game("Osso", 6, 9.50, $dog, "gomma");

$products = [
    $crocchetteCaneVegane,
    $crocchetteGattoPesce,
    $cucciaCaneGrande,
    $cucciaGattoPiccola,
    $frisbeeCane,
    $ossoCane,

];