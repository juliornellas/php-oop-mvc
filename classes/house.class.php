<?php

class House {

    private string $address;
    private int $number;

    public function __construct($address, $number)
    {
        $this->address = $address;
        $this->number = $number;
    }

    public function getAddress(){
        return $this->address." nº".$this->number;
    }

}