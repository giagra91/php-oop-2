<?php 

include_once __DIR__ . "/Product.php";

class Food extends Product{
    protected $name;
    protected $weight;
    protected $expireDate;

    function __construct($weight, $expireDate, $name, $category, $price, $kindOfAnimal){
        parent::__construct($name, $category, $price, $kindOfAnimal);
        $this->weight = $weight;
        $this->expireDate = $expireDate;
    }

    function getWeight(){
        return $this->weight;
    }

    function getExpireDate(){
        return "Il prodotto scade il " . $this->expireDate;
    }

}
