<?php
date_default_timezone_set('America/Sao_Paulo');
$datanova = new DateTime();
$dataantiga = new DateTime();

$dataantiga->setDate(1989,10,15);

print_r($datanova);
echo "<br>";
print_r($dataantiga);
echo "<br>";
echo "<br> --------------";

$diferenca = $datanova->diff($dataantiga);
echo "<br>";
print_r($diferenca);
echo "<br>";
echo $diferenca->format("%a month");

// alterar fusiohorario
echo "<br>";
date_default_timezone_set('America/Sao_Paulo');
print_r($dataantiga);
echo "<br>";
print_r($datanova);
echo "<br>"

?>