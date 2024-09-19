<?php
// Classe Bed che rappresenta un prodotto di tipo cuccia
class Bed extends Product
{
    public function __construct($title, $price, $image, $category)
    {
        parent::__construct($title, $price, $image, $category, "Cuccia");
    }
}
