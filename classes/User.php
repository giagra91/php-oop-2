<?php

class User{
    protected string $firstName;
    protected string $lastName;
    protected int $birthYear;
    protected string $email;
    protected string $username;
    protected bool $isRegistred;
    protected CreditCard $creditCard;
    protected int $discount;

    function __construct($firstName, $lastName, $birthYear, $email, $username, $isRegistred = false, $creditCard, $discount = 0){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthYear = $birthYear;
        $this->email = $email;
        $this->username = $username;
        $this->isRegistred = $isRegistred;
        $this->creditCard = $creditCard;

        if($isRegistred){
            $this->discount = 20;
        } else {
            $this->discount = 0;
        }
    }



}