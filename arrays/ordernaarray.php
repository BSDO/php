<?php

// ordernação de array 

// $arr = [1,2,4,5,3,3,4,56,65];
// // $novo_array 
// sort($arr);
// print_r($arr);
// // rsort ordem contraria
// echo "Breno";

// array associativo
// $ar = [
//     "Breno" => 20,
//     "Bryan" => 30,
//     "Brenna" => 29,
//     "Andrey" => 39,
//     "Jes"=>94,
//     "Anne"=> 10
// ];
// //arsort decrescente o valor do elemento
// asort($ar);
// print_r($ar);
// echo "<br>";

// // chave do array

// ksort($ar);
// print_r($ar);
// echo "<br>";

//array_reverse

//array aleatorio
$array = range(1,15);
shuffle($array);
print_r($array);
echo "<br>";
shuffle($array);
print_r($array);
echo "<br>";
echo "<hr>";

// soma os arrray
$arr2 = [1,23,4,5,6,33,5,45,6,5];
print_r($arr2);
echo"<br>";
$soma = array_sum($arr2);
echo "$soma";
echo "<hr>"; 

// unindo arrays

$arr = [20,30,410,30,40,50,30,50,304];
$arr2 = [390,405,204,2040];

$novoarr = array_merge($arr,$arr2);
print_r($novoarr);

?>