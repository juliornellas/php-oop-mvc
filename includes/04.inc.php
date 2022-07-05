<?php
//AULA 04
 class Person {
    //Properties
    private string $name;
    private int $age;
    private string $occupation = "Contratado";

    public function __construct($name, $age, $occupation)
    {
        echo "Estamos no construtor";
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }

    public function getName(){
        return $this->name;
    }

    public function getOccupation(){
        return $this->occupation;
    }

    //Executado de forma automática. Utilizado para: Limpar o objeto, fechar uma conexão, etc
    public function __destruct()
    {
        echo "Assim como no Construct, também será executado no instanciamento da classe. Porém, no final do código!";
    }

}