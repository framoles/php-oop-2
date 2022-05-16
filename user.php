<?php

class User {

    $public $email;
    $public $name;
    $public $surname;
    $public $address;

    public function __construct($email,$name,$surname,$address){

        $this->$email = $email;
        $this->$name = $name;
        $this->$surname = $surname;
        $this->$address = $address;

    }

}

?>