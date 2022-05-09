<?php

class CreditCard{
    protected $number;
    protected $expireYear;
    protected $cvv;
    protected $bank;
    protected $isValid;

    function __construct($number, $expireYear, $cvv, $bank, $isValid = false){
        $this->number = $number;

        if($expireYear > 2022){
            $this->expireYear = $expireYear;
        }

        $this->cvv = $cvv;
        $this->bank = $bank;

        if(is_numeric($number) && strlen($number) == 16 && strlen($cvv) == 3 && $expireYear > 2022){
            $this->isValid = true;
        } else {
            $this->isValid = false;
        }
    }
}