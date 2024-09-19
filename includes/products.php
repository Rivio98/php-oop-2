<?php
// Includiamo le classi necessarie
require_once 'classes/Product.php';
require_once 'classes/Category.php';
require_once 'classes/Food.php';
require_once 'classes/Toy.php';
require_once 'classes/Bed.php';

// Creiamo delle categorie
$dogCategory = new Category("Cani", "fa-dog");
$catCategory = new Category("Gatti", "fa-cat");

// Creiamo alcuni prodotti
$dogFood = new Food("Crocchette per Cani", 19.99, "dog-food.jpg", $dogCategory);
$catToy = new Toy("Gioco per Gatti", 9.99, "cat-toy.jpg", $catCategory);
$dogBed = new Bed("Cuccia per Cani", 29.99, "dog-bed.jpg", $dogCategory);
$dogToy = new Bed("Cuccia per Cani", 29.99, "", $dogCategory);

// Array di prodotti
$products = [$dogFood, $catToy, $dogBed, $dogToy];
