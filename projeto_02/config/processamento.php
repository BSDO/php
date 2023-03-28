<?php
  
    include("conexao.php");
    include("url.php");


    //retorna dado do banco
    $id;

    if(!empty($_GET)) {
        $id = $_GET["id"];
    }  

    // retorna todos os contatos
    if(!empty($id)){

        $query = "SELECT * FROM contatos WHERE id = :id";
        $stmt = $link->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $contatos = $stmt->fetch();


    } else 
    {


            $contatos = [];

            $qry = "SELECT * FROM contatos";
        
            $stmt = $link->prepare($qry);

            $stmt->execute();

            $contatos = $stmt->fetchAll();

    }
    
?>