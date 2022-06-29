<?php
include './includes/person.inc.php';
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

    <h3>Aula 01 - Newclass.inc.php</h3>
    <p>Criando Objeto simples e vazio. Acessando diretamente o arquivo e efetuando o <em>var_dump</em> para verificar que de fato temos um objeto criado.</p>
    <hr>

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
    <hr>

    <h3>Aula 03 - Propriedades e Métodos</h3>
    <?php
    $name1 = "Saci";
    $age1 = 33;
    $occupation1 = "Desempregado";

    $name2 = "Tiradentes";
    $age2 = 41;
    $occupation2 = "Dentista";

    $person1 = new Person;

    // echo $person1->name. " - ";
    // $person1->name = $name1;
    // echo $person1->name;

    $person1->setName($name1);
    echo $person1->getName();

    ?>


    
</body>
</html>