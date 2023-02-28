<?php

// ex de metodo

class Cachorro{
    function andar(){
        echo "Andando pela rua.<br>";
    }

    function latir(){
        echo "AU AU Au Au <br>";
    }
}

$pitbull = new Cachorro;
$rotvaler = new Cachorro;

$pitbull->latir();
$rotvaler->latir();

$pitbull->andar();
$rotvaler->andar();









?>