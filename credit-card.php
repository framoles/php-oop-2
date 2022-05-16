<?php

class CreditCard {

    public $number;
    public $expDate;
    protected $cvv;

    public function __construct($number,$expDate,$cvv){

        $this->$number = $number;
        $this->$expDate = $expDate;
        $this->$cvv = $cvv;

    }

}

?>