<?php

class Product {
    protected $name;
    protected $category;
    protected $price;
    protected $kindOfAnimal;
    
    
    function __construct($name, $category, $price, $kindOfAnimal){
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->kindOfAnimal = $kindOfAnimal;
    }

    
    function getName(){
        return $this->name;
    }

    function getPrice(){
        return $this->price;
    }
}