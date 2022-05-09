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
    protected array $cart;


    
    /**
     * @param string $firstName User's first name
     * @param string $lastName User's last name
     * @param int $birtYear User's year of birth
     * @param string $email User's email
     * @param string $username User's nickname
     * @param bool $isRegistred Bool to check if user is logged
     * @param CreditCard $creditCard User's credit card
     * @param int $discount User's percentage of discount
     * @param array $cart User's cart of products
     *  
     * */
    function __construct($firstName, $lastName, $birthYear, $email, $username, $isRegistred = false, $creditCard, $discount = null, $cart = []){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthYear = $birthYear;
        $this->email = $email;
        $this->username = $username;
        $this->isRegistred = $isRegistred;
        $this->creditCard = $creditCard;
        $this->cart = [];

        if($isRegistred){
            $this->discount = 20;
        } else {
            $this->discount = 0;
        }
    }

    function getFirstName(){
        return "Il nome è " . $this->firstName;
    }

    function getLastName(){
        return "Il cognome è " . $this->lastName;
    }

    function getBirthYear(){
        return "L'anno di nascita è il " .  $this->birthYear;
    }

    function getEmail(){
        return "L'indirizzo email è " . $this->email;
    }


    function buyProduct($product){
        $price = $product->getPrice();
        if($this->creditCard->getValidation() && $price <= $this->creditCard->getBalance()){
            return "Hai acquistato il prodotto e hai speso: €" . $price;
        }
    }
}