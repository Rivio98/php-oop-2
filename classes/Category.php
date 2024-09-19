<?php
// Classe Category 
class Category
{
    public $name;
    public $icon;

    // Costruttore per inizializzare i dati della categoria
    public function __construct($name, $icon)
    {
        $this->name = $name;
        $this->icon = $icon;
    }

    // Metodo per ottenere il nome della categoria
    public function getName()
    {
        return $this->name;
    }

    // Metodo per ottenere l'icona della categoria
    public function getIcon()
    {
        return $this->icon;
    }
}
