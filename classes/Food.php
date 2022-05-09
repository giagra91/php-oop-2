<?php 

include_once __DIR__ . "/Product.php";

class Food extends Product{
    protected $name;
    protected $weight;
    protected $expireDate;

    function __construct($name, $weight, $expireDate, $category, $price, $kindOfAnimal){
        parent::__construct($category, $price, $kindOfAnimal);
        $this->name = $name;
        $this->weight = $weight;
        $this->expireDate = $expireDate;
    }


    function getName(){
        return $this->$name;
    }

    function getWeight(){
        return $this->weight;
    }

    function getExpireDate(){
        return $this->expireDate;
    }

}
