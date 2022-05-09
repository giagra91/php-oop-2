<?php

class User{
    protected string $firstName;
    protected string $lastName;
    protected string $email;
    protected string $username;
    protected bool $isRegistred;
    protected CreditCard $creditCard;
    protected int $discount;

    function __construct($firstName, $lastName, $email, $username, $isRegistred = false, $creditCard, $discount){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->username = $username;
        $this->isRegistred = $isRegistred;
        $this->creditCard = $creditCard;
        $this->discount = $discount;
    }



}