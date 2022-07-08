<?php
// //Aula 06 Load classes
// spl_autoload_register('myLoadClasses');
// //Busca o nome da classe "new Person", ou seja, o Person, no arquivo
// function myLoadClasses($className){
//     $path = "classes/";
//     $ext = ".class.php";
//     $fullPath = $path.$className.$ext;

//     //Verificar se a Classe existe, em caso de erro de digitação ao criar o "new NomeDoObjeto" e informa qual classe ocorreu o problema
//     if(!file_exists($fullPath)){
//         //exit();
//         return false;
//     }

//     include_once $fullPath;
// }

//INSERIDO NA AULA 08 - CALCULADORA
//Comentar o anterior
spl_autoload_register('myAutoLoader');

function myAutoLoader($className){
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    //Se na URL vier a palavra INCLUDES significa que o arquivo não está na pasta raiz
    if (strpos($url, 'includes') !== false){
        $path = '../classes/';
    }else{
        $path = 'classes/';
    }

    $ext = ".class.php";
    $fullPath = $path.$className.$ext;

    require_once $fullPath;
}