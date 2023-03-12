<?php

//conexao com o banco de dados  
// uma forma de conecta ao banco

$host = "localhost";
$root = "root";
$pass = "";
$db = "agenda";


$link = new mysqli($host,$root,$pass,$db);

if($link->connect_error){
    echo "Erro na conexão com o ".$link->connect_error  ."<br>"; 
}
else
{
    //echo "conectado com sucesso!";
}




?>