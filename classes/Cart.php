<?php

class Cart {
    protected array $cart;

    public function __construct($cart = []){
        $this->cart = $cart;
    }

    public function addToUserCart($element){
        $this->cart [] = $element;
    }

    public function deleteFromUserCart($element){
        if(in_array($element, $this->cart)){
            array_splice($this->cart, array_search($element, $this->cart), 1);
        }
    }


}