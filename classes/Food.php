<?php

require_once __DIR__ . '/Product.php';

class Food extends Product {
    public $ingredient;
    public $deadline;

    /**
     * 
     * crea nuovo cibo
     * 
     * $ingredient son gli ingredienti del prodotto
     * $deadline è la scadenza del prodotto
     * 
     */

    function __construct($name, $description, $price, $ingredient, $deadline){

        parent::__construct($name, $description, $price);

        $this->ingredient = $ingredient;
        $this->deadline = $deadline;
    }

    public function getIngredients(){
        return $this -> ingredients;
    }

    public function setIngredients($ingredients){
        $this->ingredients = $ingredients;
    }

    public function getDeadline(){
        return $this->deadline;
    }

    public function setDeadline(){
        $this->deadline = $deadline;
    }

}

?>