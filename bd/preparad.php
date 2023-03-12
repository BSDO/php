<?php
    include('conexao.php');

    // preparad stataments
    // query com placeholders

    //inserido dados
    // $jose = "Jose";
    // $idade = "30";
    // $stmt = $link->prepare("INSERT INTO usuarios (nome,idade) VALUES (?,?)"); 

    // $stmt->bind_param("ss",$jose,$idade);
    // $stmt->execute();
    
    // //Selecionar dados

    // $id = 3;
    // // selecionado a query
    // $query = $link->prepare("SELECT * FROM usuarios WHERE id > ?");
    // // passando o que vou buscar
    // $query->bind_param("i",$id);
    // // executando a query
    // $query->execute();
    // // peganndo o resultado
    // $result = $query->get_result();
    // // colocando em um array os dados
    // $dado = $result->fetch_all();
    // print_r($dado);

    // //RESGATANDO UM RESULTADO

    // $id = 9;
    // // selecionado a query
    // $query1 = $link->prepare("SELECT * FROM usuarios");
    // // passando o que vou buscar
    // //$query1->bind_param("i",$id);
    // // executando a query
    // $query1->execute();
    // // peganndo o resultado
    // $result1 = $query1->get_result();
    // // colocando em um array os dados
    // $dado2 = $result1->fetch_row();
    // print_r($dado2);    
        

    // ATUZIZANDO dados
    // $id2 = 7;

    // $query2 = $link->prepare("UPDATE usuarios SET nome = ?,idade = ? WHERE id = ? ");
    
    // $nome2 = "Brenda";
    // $idade2 = "25";

    // $query2->bind_param("ssi",$nome2,$idade2,$id2);
    // $query2->execute();
    
    // if($query2->error){
    //     echo "Erro: " . $query2->error;
    // }

    // deletar dados
    
    $id = 7; 
    // quando id for maior que o id passado,vai deletar tudo
    $query2 = $link->prepare("DELETE FROM usuarios WHERE id > ? ");
    
    $query2->bind_param("i",$id);
    $query2->execute();
    
  



?>