<?php
    include('conexao.php');
     //INSERIR DADOS 

    // dados para ser inclusos 
    $table = "usuarios";
    $nome = "Gabriel"; 
    $datanascimento = date('d-m-y');
    $idade = 30;
    $email = "brenosill@hotmail.com";

    // query com os parametros de tabela e cada dados passado
    $query = "INSERT INTO $table (nome, idade,datanascimento,email) VALUES ('$nome','$idade','$datanascimento','$email')";
    
    // link que enviar para o banco a partir de uma query de insert
    $link->query($query);
   

    $link->close();


?>   