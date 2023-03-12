<?php

// HABILIAR O PHP.INI NO APACHE DO SERVIDOR
 
// conexao.pdo utilizada na maiora dos sistemas 

$host = "localhost";
$user = "root";
$pass = "";
$db = "teste";

$linkPdo = new PDO("mysql:host:$host;dbname=$db",$user,$pass); 






?>