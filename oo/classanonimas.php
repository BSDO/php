<?php

// classes anonimas sao criadas numa variavel e nao tem nome

$humano = new class(){
    public $nome = "Breno";

    public function dizer(){
        echo "ola $this->nome";
    }
};

echo $humano->dizer() ."";






?>