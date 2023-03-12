<?php
    include('conexao.php'); // busca a conexão do banco


    // Exutando uma query para o banco
    // criando query
    $sql = "SELECT * FROM usuarios ";
    // executando o metodo query para puxar do banco
    $resultado = $link->query($sql);

    print_r($resultado);
 

    $link->close();

?>