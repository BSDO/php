<?php

$data = new DateTime();
print_r($data);
echo "<br>";

// metodos do datetime = 
// format  formatada data

echo $data->format('d - - m - - y') . "<br>";
echo $data->format('m / l / y') . "<br>";
echo $data->format('l- - F - - y') . "<br>";

//modify

$data->modify('+10 years');
echo $data->format('d/m/y') . " 10 anos a mais<br>";

$data->modify('+2 month');
echo $data->format('d/m/y') . " 2 meeses a mais <br>";

$data->modify('+10 days');
echo $data->format('d/m/y') . " 10 days a mais<br>";


//setDate

$data->setDate(2099,02,05);
print_r($data);

//setTime

echo "<br>";
$data->setTime(12,35,60);
print_r($data);









?>