<?php

//Classe abstrata não é possivel instanciar um objeto
//Pode apenas ser utilizada por outras classes, via extends, por exemplo

abstract class Visa {
    public function visaPayment(){
        return "Perfom a payment";
    }

    //Regra
    //Para usar abstract numa função a classe raiz precisa ser abstrata tb
    //Todas as classes que extendem essa classe precisam ter a mesma função é uma espécie de link entre as classes conectadas, uma especie de amarração, tem que ter pra funcionar    
    abstract public function getPayment();
}