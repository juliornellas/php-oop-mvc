<?php
// AULA 05
class Person {
    //Properties
    private string $name;
    private int $age;
    private string $occupation;

    //Propriedade ou Métodos estaticos podem ser acessados sem instanciar um objeto
    //Cria-se qd não há a necessidade de fazer parte de um objeto, não necessariamente precisa ter um vinculo
    //Prop. e Met. Estaticos são distintos das propriedades e metodos regulares, são independentes, mas são "colocados juntos" pra criar uma espécie de categoria sobre o que se aborda
    //Ou seja, são questões relativas umas as outras que podem ser usadas como se fosse parte integrante
    //Static significa que será um padrão ACESSÍVEL PARA TODOS
    //Acessa como uma variavel e não como propriedade, pois vc está acessando sem instanciar um objeto
    private static $drinkingAge = 18;

    public function __construct($name, $age, $occupation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }

    //Diferença é que a função STATIC pode ser acessada sem ter a necessidade de instanciar um objeto
    public static function setDA($newValue){
        self::$drinkingAge = $newValue;
    }
    //Private
    public static function getDA(){
        return self::$drinkingAge;
    }

    //Objeto precisa estar instanciado
    public function setDrinkingAge($newValue){
        self::$drinkingAge = $newValue;
    }

    public function getDrinkingAge(){
        return self::$drinkingAge;
    }

}