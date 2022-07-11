<?php
//Aula 07 - Type declaration. 0 = false, 1 = true
//Garante que ao enviar os dados seja no padrão definido na função de recebimento da classe
declare(strict_types = 1);

// include './includes/05.inc.php';

// //Aula 06 Load classes
// spl_autoload_register('myLoadClasses');
// //Busca o nome da classe "new Person", ou seja, o Person, no arquivo
// function myLoadClasses($className){
    //     $path = "classes/";
    //     $ext = ".class.php";
    //     $fullPath = $path.$className.$ext;
    
    //     include_once $fullPath;
    // }
//Criado arquivo a parte (em INCLUDES) para carregar esse código do AUTOLOAD
include 'includes/autoloader.inc.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP with OOP and MVC</h1>

    <!-- AULA 01 -->
    <div>
        <h3>Aula 01 - Newclass.inc.php</h3>
        <p>Criando Objeto simples e vazio. Acessando diretamente o arquivo e efetuando o <em>var_dump</em> para verificar que de fato temos um objeto criado.</p>
    </div>

    <hr>

    <!-- AULA 02 -->
    <div>
        <h3>Aula 02 - person.inc.php</h3>
        <p>Visibility and Inheritance</p>
        <p>Switch between private, protected and public.</p>
        <p>
            <em>Obj Pet</em>:
            <?php
                // $pet1 = new Pet;
                // echo $pet1->owner()
                // ."<br>".
                // // $pet1->lastName()
                // // $pet1->last;
                // $pet1->firstName()
                // ;
            ?>
            <br>
    
        </p>
        <p>
            <em>Obj Person</em>:
            <?php
                // $person = new Person;
                // echo $person->first;
                // echo $person->getName();
            ?>
        </p>
    </div>

    <hr>

    <!-- AULA 03 -->
    <div>
        <h3>Aula 03 - Propriedades e Métodos</h3>
        <?php
        // $name1 = "Saci";
        // $age1 = 33;
        // $occupation1 = "Desempregado";

        // $name2 = "Tiradentes";
        // $age2 = 41;
        // $occupation2 = "Dentista";

        // $person1 = new Person;

        // echo $person1->name. " - ";
        // $person1->name = $name1;
        // echo $person1->name;

        // $person1->setName($name1);
        // echo $person1->getName();

        ?>
    </div>

    <hr>

    <!-- AULA 04 -->
    <div>
        <h3>Aula 04 -  Constructors and Destructors</h3>
        <p>Definindo tb o tipo da variavel e deletando o objeto</p>
        <?php
            // $name1 = "Saci";
            // $age1 = 33;
            // $occupation1 = "Desempregado";
            // $p1 = new Person($name1, $age1, $occupation1);

            // // $p2 = new Person("Tiradentes", 41, "Dentista");

            // echo "<pre>";
            // var_dump($p1);
            // echo "</pre>";

            // // Deletando objeto
            // // unset($p1);
        ?>
    </div>

    <hr>

    <!-- AULA 05 -->
    <div>
        <h3>Aula 05 - Static Properties and Methods</h3>
        <p>Acessando e manipulando, sem instanciar um objeto</p>
        <?php
            // echo Person::$drinkingAge;
            // echo "<br>";
            // Person::setDrinkingAge(21);
            // echo "<br>";
            // echo Person::$drinkingAge;
        ?>
        <p>Acessando e manipulando num objeto instanciado</p>
        <?php
        // Person::newDrinkingAge(87);

        //Classe 21
        // Person::setDA(21);
        // echo Person::getDA()."<br>";

        // $person = new Person('Mula Sem Cabeça', 18, "Desempregado");
        // //Objeto pegou novo padrão
        // echo $person->getDrinkingAge()."<br>";

        // //Setando pela Classe = 71
        // Person::setDA(71);
        // echo $person->getDrinkingAge()."<br>";

        // //Setando pelo Objeto = 33
        // $person->setDrinkingAge(33);
        // echo $person->getDrinkingAge()."<br>";

        // //Consultando atarves da Classe ultimo valor atualizado
        // echo Person::getDA()."<br>";

        ?>
    </div>

    <hr>

    <!-- AULA 06 -->
    <div>
        <h3>Aula 06 - Load Classes Automatically</h3>
        <p>Criação da pasta <strong>classes</strong> para exemplificar o carregamento automatico das classes no topo do arquivo.</p>
        <h4>Criando um Namespace</h4>
        <p>Forma de organizar as classes em categorias</p>
        <p>Criado pasta <em>Person</em>, movida classe categorizada para pasta</p>
        <?php 
        
        // $person =  new People\Person("Tiradentes", 45);
        // // $person =  new Person("Tiradentes", 45);
        // echo $person->getPerson()."<br>";

        // $house = new House("Rua do Sambaqui", 13);
        // echo $house->getAddress();

        ?>
    </div>

    <hr>

    <!-- AULA 07 -->
    <div>
        <h3>Aula 07 - Type declaration</h3>
        <p>Define o padrão obrigatório de dados a serem aceitos pelas classes</p>

        <?php
        // $person =  new People\Person("Tiradentes", 45);
        // $person->setName("José");
        // $person->setAge(39);
        // echo $person->getPerson()."<br>";
        ?>
    </div>

    <hr>

    <!-- AULA 08 -->
    <div>
        <h3>Aula 08 - Calculadora</h3>
        <p>Criação do arquivo <em>calc.class.php e inc.php</em> e novo autoloader.</p>

        <form action="includes/calc.inc.php" method="post">
            <p>Minha calculadora</p>
            <input type="number" name="num1" placeholder="Primeiro número" />
            <select name="operator">
                <option value="sum">+</option>
                <option value="sub">-</option>
                <option value="div">/</option>
                <option value="mul">*</option>
            </select>
            <input type="number" name="num2" placeholder="Segundo Número">
            <button type="submit" name="submit">Calcular</button>
        </form>
    </div>

    <hr>

    <!-- AULA 09 -->
    <div>
        <h3>Aula 09 - Scope resolution operator ::</h3>
        <p>Criados arquivos <em>first</em> e <em>second</em>.class.php</p>

        <?php
        // $firstClass = new FirstClass;

        // //Acessar constante e método
        // echo "CONSTANTE: ".$firstClass::EXAMPLE."<br/>";
        // echo "METODO: ".$firstClass::test();
        // echo "<br><br>SECOND CLASS<br>";
        // $secondClass = new SecondClass;
        // echo "PROPRIEDADE ESTÁTICA: ".$secondClass::$staticProperty."<br>";
        // echo $secondClass::anotherTest();
        ?>
    </div>

    <hr>

    <!-- AULA 10 -->
    <div>
        <h3>Aula 10 - Interfaces</h3>
    </div>



    
</body>
</html>