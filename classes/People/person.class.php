<?php

namespace People;

class Person {

    private string $name;
    private int $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getPerson(){
        return $this->name." - ".$this->age;
    }

}