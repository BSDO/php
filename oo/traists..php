<?php


// traits permite reutilizar o codigo sem hierarquia de classe


trait Obj { // trait sendo usada na class Brenno

    public function Falar(){
        echo " Ola meu nome é Jose";
    }
}


class Breno {
    use Obj;
}

$x = new Breno;
$x->Falar();



?>




?>