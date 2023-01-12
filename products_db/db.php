<?php

require_once __DIR__ . "/../classes/Product.php";
require_once __DIR__ . "/../classes/Food.php";
require_once __DIR__ . "/../classes/Petsbed.php";
require_once __DIR__ . "/../classes/Category.php";
require_once __DIR__ . "/../classes/Game.php";

$dog = new Category("cane", '<i class="fa-solid fa-dog"></i>');
$cat = new Category("gatto", '<i class="fa-solid fa-cat"></i>');

$crocchetteCaneVegane = new Food("Crocchette Vegane", 1, 6.50, $dog, "https://www.pacopetshop.it/9876-large_default/veg-vegan-per-cani-adulti.jpg" ,"vegetale", "pasto");
$crocchetteGattoPesce = new Food("Crocchette Pesce", 2, 8.50, $cat, "https://www.aquazoomaniashop.it/29157-large_default/prolife-sterilised-cat-pesce-bianco-e-patate-nutrigenomic-crocchette-gatto.jpg","pesce", "pasto");
$cucciaCaneGrande = new Petsbed("Cuccia Grande Cane", 3, 30.00, $dog, "https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/jackson/0/400/icon_topseller_1_85__0.jpg",1.5, "legno");
$cucciaGattoPiccola = new Petsbed("Cuccia piccola Gatto", 4, 26.00, $cat, "https://ss-pics.s3.eu-west-1.amazonaws.com/files/976482/page-20053_0.jpg?1573145577",0.8, "stoffa");
$frisbeeCane = new Game("Frisbee", 5, 7.50, $dog, "https://m.media-amazon.com/images/I/61BaZD-b00S._AC_SY355_.jpg","plastica");
$ossoCane = new Game("Osso", 6, 9.50, $dog, "https://www.farmacosmo.it/166170-large_default/goodie-bone-large-osso-gomma-cani-112686.jpg","gomma");

$products = [
    $crocchetteCaneVegane,
    $crocchetteGattoPesce,
    $cucciaCaneGrande,
    $cucciaGattoPiccola,
    $frisbeeCane,
    $ossoCane,

];