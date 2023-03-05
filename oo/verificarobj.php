<?php


// verificar os objetos
// is_object() => verifica se uma varieal é um objeto
class Humano{
    public function falar(){
        echo "Olá,mundo !";
    }
}

$breno = new Humano;
$brun =  10;

if(is_object($breno)){
    echo "Isso é um objeto";
}
else{
    echo "Isso não é um objeto";
}
echo "<br>";
if(is_object($brun)){
    echo "Isso é um objeto";
}
else{
    echo "Isso não é um objeto <br>";
}

// get_class() => verifica a classe de um objeto
echo get_class($breno) . "<br>"; // mostrar qual a class

// method_exists() = verifica se um metodos existe em um objeto

if(method_exists($breno,"falar")){
    echo "Esse metodoo existe <br>";
}
else{
    echo "Metodo não encontrado <br>";
}

if(method_exists($breno,"jogar")){
    echo "Esse metodoo existe";
}
else{
    echo "Metodo não encontrado";
}













?>