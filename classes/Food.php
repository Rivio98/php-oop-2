<?php
// Classe Food 
class Food extends Product
{
    public function __construct($title, $price, $image, $category)
    {
        parent::__construct($title, $price, $image, $category, "Cibo");
    }
}
