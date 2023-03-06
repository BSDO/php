<?php

// funçoes de data
//date = recebe uma parametro que é o formtado da data 
// exibe a data atual 

$d = date('d/m/y'); // day -  month - year
echo $d . "<br>";

$d2 = date('D/m/Y'); //dia / mes /  aano
echo $d2 . "<br>";

$d3 =  date('d/m/Y');//data /  mesm / ano sem abreviação
echo $d3 . "<br>";

$d4 = date('l/F,Y'); //dia completo/mes completo / ano sem abreviação
echo $d4;
echo "<hr>";

// funcao strtotime - recebe uma string como parametro , um texto sinalizando o tempo 
echo "<h2> 5 dias</h2>";
$cincodias = strtotime("10 days");
echo $cincodias . "<br>";

$dataAtual = date('d/m/y' , $cincodias);
echo "Foi somado mais 10 dias " . $dataAtual . "<br>";
echo "<h2>100 dias</h2>";
$cemdias = strtotime("100 days");
echo $cincodias . "<br>";

$dataAtual = date('d/m/y' , $cemdias);
echo "Foi somado mais 100 dias " . $dataAtual . "<br>";

// função mktime = hora,minuto,segundo,mes,dia e ano

$date = mktime(02,04,10,03,10,2000);
$dataformatada = date('d/m/y',$date); // formatada a data
echo $dataformatada;





?>