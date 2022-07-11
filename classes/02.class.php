<?php
//AULA 02
//Visibility and Inheritance
class Person {
    private $first = "Saci";
    protected $last = "Perere";
    private $age = 33;

    private function owner(){
        return $this->first;
    }

    protected function getName(){
        return $this->owner();
    }
}

class Pet extends Person{
    public function owner(){
        // $a = "Hi there!";
        // return $a;
        return $this->getName();
    }

    public function firstName(){
        return $this->getName();
    }

    public function lastName(){
        return $this->last;
    }
}