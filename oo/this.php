<?php 
// this se refere a instancia atual do objeto 

class Animal
{
    public $nome;

    function escolherNome ($nome){
        $this->nome = $nome;
        echo "O nome do cachorro $nome";
    }

}

$frida = new Animal();
echo "<br>";
echo "o nome é igual: $frida->nome <br>";
$frida->nome = "Fridar";
echo "o nome é igual : $frida->nome <br>";


?>