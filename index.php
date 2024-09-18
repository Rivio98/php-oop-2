<?php
//classe che rappresenta la categoria (cane,gatto)
class Category
{
    public $name;
    public $icon;

    //Costrutto per inizializzare nome e icona 
    public function __construct($name, $icon)
    {
        $this->name = $name;
        $this->icon = $icon;
    }
}
//creazione di categorie
$dogCategory = new Category('Cani', '<i class="fa-solid fa-dog"></i>');
$catCategory = new Category('Gatti', '<i class="fa-solid fa-cat"></i>');

var_dump($dogCategory);

// Costruttore per inizializzare nome, prezzo e categoria
class Product
{
    public $name;
    public $price;
    public $category;

    // Costruttore per inizializzare nome, prezzo e categoria
    public function __construct($name, $price, Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    // Metodo per ottenere i dettagli del prodotto
    public function getDetails()
    {
        return "Nome: {$this->name}, Prezzo: {$this->price}€, Categoria: {$this->category->name}";
    }
}






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>

</body>

</html>