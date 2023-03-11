<?php
// date_default_timezone_set('America/Sao_Paulo');
$datanova = new DateTime();
$dataantiga = new DateTime();


$dataantiga->setDate(2007,02,03);

print_r($datanova);
echo "<br>";
print_r($dataantiga);
echo "<br>";
echo "<br>";

$diferenca = $datanova->diff($dataantiga);
echo "<br>";
//print_r($diferenca);
echo "<br>";
echo $diferenca->format("%y years");
echo "<br>";


if($diferenca->format("%y years") > 18){
    echo "Voce é o maior de idade ";
}
else{
    echo "Voce é menro de idade";
}


// alterar fusiohorario
// echo "<br>";
// date_default_timezone_set('America/Sao_Paulo');
// print_r($dataantiga);
// echo "<br>";
// print_r($datanova);
// echo "<br>";

?>