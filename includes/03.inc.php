<?php
//AULA 03
class Person {
    //Properties
    private $name = "Anônimo";
    private $age;
    private $occupation;

    //Methods
    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}