<?php

class FirstClass {
    
    const EXAMPLE = "Você não consegue alterar isso!";
    public static $default = "bla bla bla";

    public static function test(){
        // echo self::EXAMPLE;
        return "Isso é um teste!";
    }
}

// //Constantes acesso direto com o scope resolution operator
// echo $firstClass::EXAMPLE;
