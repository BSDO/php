<?php
        session_start();
        include("conexao.php");
        include("url.php");


        //$data = $_POST;

        if(!empty($_POST)){ //modificar no banco
        //print_r($data);
        // exit;

        //criar contato

           // if($data["type"] === "create"){

                $nome = $_POST["nome"];
                $telefone = $_POST["telefone"];
                $observacao = $_POST["observacao"];
                
                $query = "INSERT INTO contatos(nome, telefone, observacao) VALUES (:nome,:telefone, :observacao)";

                $result = $link->prepare($query);
                $result->bindParam(":nome" ,$nome);
                $result->bindParam(":telefone" ,$telefone);
                $result->bindParam(":observacao" ,$observacao);

                try{
                    $result->execute();
                    $_SESSION["msg"] = "Contato criado com sucesso!";
                }catch(PDOException $e){
                    $error = $e->getMessage();
                    echo "Erro: $error";
                }

                header ("location:" . $BASE_URL . "../index.php");

        }else if(!empty($_POST)){

        }

        else { //selecao de dados
        $id;

        if(!empty($_GET)) {
            $id = $_GET["id"];
        }  

        //retorna todos os contatos
        if(!empty($id)){

            $query = "SELECT * FROM contatos WHERE id = :id";
            $stmt = $link->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();

            $contact = $stmt->fetch();


        }
         else 
        {
                // $contact = [];

                $qry = "SELECT * FROM contatos";
            
                $stmt = $link->prepare($qry);

                $stmt->execute();

                $contact = $stmt->fetchAll();

            }
        }

        $link = null;
    
    

    
    
?>