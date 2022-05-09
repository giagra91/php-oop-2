<?php

class Product {
    protected $category;
    protected $price;
    protected $kindOfAnimal;
    
    
    function __construct($category, $price, $kindOfAnimal){
        $this->category = $category;
        $this->price = $price;
        $this->kindOfAnimal = $kindOfAnimal;
    }

}