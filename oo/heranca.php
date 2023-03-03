<?php
// herança herdar metodos e propriedades de outra classe
// extends 

class Programador {
    public $idade = 30;
    public $nivel = "Senior";
    public $salario = "R$ 24.034,00";

    public function mostrarDados(){
        echo "Idade: $this->idade.Seu nivel é $this->nivel com uma salário de $this->salario";
    }

    private function salarioconf(){ //PODE SER USADO APENAS DENTRO DESSA CLASS
        echo "Salarios é confidencial $this->salario";
    }
    public function mostraSalario(){ // acessa a funcao privada
        $this->salarioconf();
    }
}

$nome = new Programador();
echo $nome->mostrarDados() . "<br>";


class Pessoa extends Programador{

}

$pesssoa_teste = new Pessoa;
echo "Teste:" .$pesssoa_teste->mostrarDados();
$pesssoa_teste->mostraSalario();


?>