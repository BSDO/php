<?php

use LDAP\Result;

    include('conexao.php');


    // Selecionando os dados do banco

    $q = "SELECT * FROM usuarios";

    $resul = $link->query($q);


    // um resultado
    $dados = $resul->fetch_assoc();
    print_r($dados);
    echo "<br>";

    // varios resultado 
    $dados2 = $resul->fetch_all();
    print_r($dados2);
    



?>