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




}

// $croc = new Food("croc", "500", "01/04/2023", "Food", 4.90, "Cat");
