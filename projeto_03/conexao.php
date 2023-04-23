<?php

    $host = "localhost";
    $dbname = "moviestar";
    $user = "root";
    $pass = "";

    try {

        $link = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

        // Ativar o modo de erros
        $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
    } 

?>