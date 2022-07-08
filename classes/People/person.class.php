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

    //Aula 07 - type declaration
    //Numero em string "aceita" e acaba convertendo, pq numa string pode haver numeros. Porém se na chegada do dado na função vc "forçar" e dizer o tipo de dado, ai da o erro. Para INT basta a declaração do tipo na propriedade da classe
    public function setName(string $newValue){
        $this->name = $newValue;
    }

    public function setAge(int $newValue){
        $this->age = $newValue;
    }

}