<?

//visibilidade de propriedades (segurança para classes ) 
//public
//protected
//private 

class Car {
    public $rodas = 4;    
}
class Mecanica {
    function alterarRodas($obj){
        $obj->rodas = 10;
    }
}

$carro = new Car;
echo $carro->rodas . "<br>";

$roda = new Mecanica;
$roda->alterarRodas($carro);
echo $carro->rodas;

?>