<?php
// 

class Api {
    // propriedade de const
    public const API = "923kfmde30k";
    public const PERNA =  2;

    function mostarconst(){
        echo self::PERNA . "<br>"; //usa self para acessa um metodo de const 
    }
}

$api1 = new Api(); // instanciando a classe

echo "API: ". $api1::API . "<br>"; // chamando a propriedade
echo $api1->mostarconst(); // usando a funcção