<?php

// construtor

class Humano{
    public $pes;
    public $maos;
    public $nome;

    function __construct($pes,$maos,$nome){ // funçao que ja passa 
        $this->pes = $pes;
        $this->maos = $maos;
        $this->nome = $nome;
    }
}


$breno = new Humano(10, 20, 'Breno');
echo " o nome: $breno->nome  $breno->pes $breno->maos";



?>