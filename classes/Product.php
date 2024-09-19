<?php
// Classe Product 
class Product
{
    public $title;
    public $price;
    public $image;
    public $category;
    public $type;

    // Costruttore per inizializzare i dati del prodotto
    public function __construct($title, $price, $image, $category, $type)
    {
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
        $this->type = $type;
    }

    // Metodo per ottenere i dettagli del prodotto
    public function getDetails()
    {
        return [
            'title' => $this->title,
            'price' => $this->price,
            'image' => $this->image,
            'category' => $this->category,
            'type' => $this->type
        ];
    }
}
