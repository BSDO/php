<?php

//classes e metodos abstratos 


abstract class Carro{ // sempre usar o metodo sattic
    static public function velocidade() {
        echo "A velocidade é de  200kms";
    }

}

// nao sao estanciadas,mas usada diretas 

Carro::velocidade();



?>