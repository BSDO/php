<?php

    // Sesssion var que persiste em varias paginas
    // utiliza cookies ou passa via url
    // salva em arquivos - caminho :php.ini -> session.sabe_path

    session_start(); 
    
    $nome = $_SESSION['nome'];
    echo "Digite $nome";


?>