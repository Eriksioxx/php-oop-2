<?php 

class Product {
    public $name;
    public $description;
    public $price;


/**
 * 
 * $name è il nome del prodotto
 * $description è la descrizione del prodotto
 * $price è il prezzo del prodotto
 * 
 */

    function __construct($name, $description, $price){
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function getName(){
        return $this->name;
    }

    public function setName(){
        $this->name = $name;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setDescription(){
        $this->description = $description;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;
    }

}
?>