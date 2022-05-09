<?php

include_once __DIR__ . "/Product.php";

class Game extends Product{
    protected $name;
    protected $weight;
    protected $measures;


    function __construct($name, $weight, $measures, $category, $price, $kindOfAnimal){
        parent::__construct($category, $price, $kindOfAnimal);
        $this->name = $name;
        $this->weight = $weight;
        $this->measures = $measures;

    }
}