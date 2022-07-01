<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'Models/Product.php';
require 'Models/Fruit.php';
require 'Models/Drink.php';

$banana = new Fruit("Banana", 1, true, false);
$apple = new Fruit("Apple", 2.5, true, false);
$wine = new Drink("Wine", 12, false, true, );

$products = [
    $banana,
    $apple,
    $wine,
];

require 'views/home.php';