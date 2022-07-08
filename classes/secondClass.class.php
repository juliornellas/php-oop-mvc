<?php
//Em herança CONSTANTES e métodos estaticos não funcionam como metodos e variaveis regulares
class SecondClass extends FirstClass {
    public static $staticProperty = "Propriedade estatica!";

    public static function anotherTest(){
        echo parent::EXAMPLE;
        echo "<br>";
        echo self::$staticProperty;
        echo "<br>";
        echo parent::$default;
    }
}