<?php

//propriedade é uma variavel dentro de uma class 
// public pode ser acessada fora do escopo do objeto 

class SomaNmr{
    public $nome = "Breno";
 
    
}

$pessoa = new SomaNmr();

echo "olá " . $pessoa->nome; // acessando a propriedade     