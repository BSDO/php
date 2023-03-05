<?php

// ex de metodo
/*
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


*/


//ex 
/*
class Pessoa{
    public $nome;
    public $idade;

    function andar($m){
        echo "O esta andando $m";
    }
}


$breno = new Pessoa();
$breno->nome = "Breno";
echo $breno->nome;
*/

//ex de this


// class Car {
// public $cor;
// public $motor;
// public $velocidademaxima;

// function setVelocidademaxima ($vel){
//     $this->velocidademaxima = $vel;
// }

// function getVelocidademaxima(){
//     echo "Velocidade maxima em $this->velocidademaxima kms!";
// }

// }

// $bmw = new Car();
// $bmw->cor = "Azul";
// $bmw->motor = 2.0;
// $bmw->setVelocidademaxima(399);
// $bmw->getVelocidademaxima();

// echo "A bmw $bmw->cor tem um belo motor  de $bmw->motor";

// exercicio de heranças

echo "<h1>Exercio de Heranças: </h1><hr>";

class Humano { // classe com 2 propriedade e um metodo

    public $maos = 2;
    public $pes = 2;

    public function fala(){
        echo "Olaaaaaaaaaaaaaaaaaa<br>";
    }
}

class Professor extends Humano{
    public $disciplina = "Matemática";

    public function lecionando(){
        echo "O professor esta dando aula de $this->disciplina.<br>";
    }
}

$breno = new Humano();
echo "Mãos: $breno->maos<br> pes: $breno->pes<br>";
$breno->fala();
echo "<br><hr>";

$jose = new Professor();
$jose->lecionando();
echo "$jose->pes";







?>