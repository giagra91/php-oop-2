<?php

include_once __DIR__ . "/Cart.php";

class User{
    protected string $firstName;
    protected string $lastName;
    protected int $birthYear;
    protected string $email;
    protected string $username;
    protected bool $isRegistred;
    protected CreditCard $creditCard;
    protected int $discount;
    protected Cart $cart;


    
    /**
     * @param string $firstName User's first name
     * @param string $lastName User's last name
     * @param int $birtYear User's year of birth
     * @param string $email User's email
     * @param string $username User's nickname
     * @param bool $isRegistred Bool to check if user is logged
     * @param CreditCard $creditCard User's credit card
     * @param int $discount User's percentage of discount
     * @param Cart $cart User's cart of products
     *  
     * */
    function __construct($firstName, $lastName, $birthYear, $email, $username, $isRegistred = false, $creditCard, $discount = null, $cart){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthYear = $birthYear;
        $this->email = $email;
        $this->username = $username;
        $this->isRegistred = $isRegistred;
        $this->creditCard = $creditCard;
        $this->cart = $cart;

        if($isRegistred){
            $this->discount = 20;
        } else {
            $this->discount = 0;
        }
    }

}