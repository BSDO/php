<?php
    include('conexao.php');


    //criando tabela
    $sql = "CREATE TABLE teste1 (nome varchar(200), sobrenome varchar(200),idade int(11))";
    // enviando via query as tabelas criadas
    $link->query($sql);
    // Para deletar uma tabela é somente executar
    $sql1 = " DROP TABLE teste1 ";
    $link->query($sql1);
    // outra maneira de passa para o banco um comando
   // $result = mysqli_query($link,$sql);
    $link->close();




 


?>