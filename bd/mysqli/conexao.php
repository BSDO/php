<?php

//conexao com o banco de dados  
// para conectar ao banco de dados usa-se mysqli

// uma forma de conecta ao banco
$host = "localhost";
$root = "root";
$pass = "";
$db = "teste";


$link = new mysqli($host,$root,$pass,$db);

// Verificar se teve erro na conexao
// mysqli_connect_error()  mostrar o erro de conexao do banco
// no oo é con link->connect_error
if($link->connect_error){
    echo "Erro na conexão com o ".$link->connect_error  ."<br>"; 
}




?>