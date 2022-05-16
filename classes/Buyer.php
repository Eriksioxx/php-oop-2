<?php

class Buyer {
    public $first_name;
    public $last_name;
    public $age;
    public $is_registered;
    public $discount;
    public $credit_card;

    /**
     * crea un nuovo acquirente
     *
     * $first_name è il nome dell'acquirente
     * $last_name è il cognome dell'acquirente
     * $age l'età dell'acquirente
     * $is_registred è la verifica se l'acquirente è registrato
     * $discount è lo sconto dell'acquirente se è registrato
     * $credit_card è la carta di credito dell'acquirente
     * 
     */

    function __construct($first_name, $last_name, $age, $is_registered, $credit_card){
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->age = $age;
    $this->is_registered = $is_registered;
    $this->discount = $this->setDiscount();
    $this->setCredit_card($credit_card);
    }

    public function getFirst_name(){
        return $this->first_name;
    }

    public function setFirst_name($first_name){
        $this->first_name = $first_name;
    }

    public function getLast_name(){
        return $this->last_name;
    }

    public function setLast_name($last_name){
        $this->last_name = $last_name;
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function getIs_registered(){
        return $this->is_registered;
    }

    
    public function setIs_registered($is_registered){
        $this->is_registered = $is_registered;
    }

    public function getDiscount(){
        return $this -> discount;
    }

    public function setDiscount(){
    if ($this->is_registered == true) {
        $this->discount = 20;
    } else {
        $this->discount = 0;
    }
    return $this -> discount;
    }
        
    public function setCredit_card($credit_card){
        if ($credit_card instanceof CreditCard){
            return $this->credit_card = $credit_card;
        } else {
            return false;
        }
    }

    public function buyNewProduct($product){

        if ($this->credit_card->expiration_date < date('Y')) {
            return "Transazione non riuscita, la tua carta di credito è scaduta";
        }

        if ($this->credit_card->balance < $product->price){
            return "Credito insufficiente";
        }

        if ($this->discount > 0) {
            $price = $product->price - ($product->price/100 * $this->discount);
            $this->credit_card->balance -= $price;

            return "transazione riuscita, hai uno sconto del $this->discount%";
        } else {
            $this->credit_card->balance -= $product->price;

            return "Transazione riuscita";
        }
    }
}

?>