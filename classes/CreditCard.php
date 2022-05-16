<?php

class CreditCard{
    public $number;
    public $expiration_date;
    public $balance;

    /**
    * crea una carta di credito
    * 
    * $number è il numero dell carta di credito
    * $expiration_date è la scadenza della carta di credito
    * $balance è il saldo corrente della carta di credito
    *
    */

    function __construct( $number, $expiration_date, $balance ) {
        $this -> number = $number;
        $this -> expiration_date = $expiration_date;
        $this -> balance = $balance;
    }

    public function getNumber() {
        return $this ->number;
    }

    public function setNumber($number) {
        $this->number = $number;
    }

    public function getExpiration_date(){
        return $this->expiration_date;
    }

    public function setExpiration_date($expiration_date){
        $this->expiration_date = $expiration_date;
    }

    public function getBalance(){
        return $this->balance;
    }

    public function setBalance($balance){
        $this->balance = $balance;
    }

}

?>