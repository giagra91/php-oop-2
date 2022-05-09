<?php

include_once __DIR__ . "/Product.php";

class Toy extends Product{
    protected $weight;
    protected $measures;


    function __construct($weight, $measures, $name, $category, $price, $kindOfAnimal){
        parent::__construct($name, $category, $price, $kindOfAnimal);
        $this->weight = $weight;
        $this->measures = $measures;

    }

    function getWeight(){
        return $this->weight;
    }

    function getMeasures(){
        return $this->measures;
    }


}