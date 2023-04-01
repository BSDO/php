<?php
        session_start();

        include("conexao.php");
        include("url.php");


        $data = $_POST;

    // MODIFICAÇÕES NO BANCO
    if(!empty($data)) {
        

        // Criar contatos
        if($data["type"] === "create") {
 
        $nome = $data["nome"];
        $telefone = $data["telefone"];
        $observacao = $data["observacao"];

        $query = "INSERT INTO contatos  (nome, telefone, observacao) VALUES (:nome, :telefone, :observacao)";

        $stmt = $link->prepare($query);

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":telefone", $telefone);
        $stmt->bindParam(":observacao", $observacao);

        try {

            $stmt->execute();
            $_SESSION["msg"] = "Contato criado com sucesso!";
        
        } catch(PDOException $e) {
            // erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error";
        }

        } else if($data["type"] === "edit") {

        $nome = $data["nome"];
        $telefone = $data["telefone"];
        $observacao = $data["observacao"];
        $idcontato = $data["idcontato"];

        $query = "UPDATE contatos
                    SET nome = :nome, telefone = :telefone, observacao = :observacao 
                    WHERE idcontato = :idcontato";

        $stmt = $link->prepare($query);

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":telefone", $telefone);
        $stmt->bindParam(":observacao", $observacao);
        $stmt->bindParam(":idcontato", $idcontato);

        try {

            $stmt->execute();
            $_SESSION["msg"] = "Contato atualizado com sucesso!";
        
        } catch(PDOException $e) {
            // erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error";
        }

        } else if($data["type"] === "delete") {

        $idcontato = $data["idcontato"];

        $query = "DELETE FROM contatos WHERE idcontato = :idcontato";

        $stmt = $link->prepare($query);

        $stmt->bindParam(":idcontato", $idcontato);
        
        try {

            $stmt->execute();
            $_SESSION["msg"] = "Contato removido com sucesso!";
        
        } catch(PDOException $e) {
            // erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error";
        }

        }

        // Redirect HOME
        header("Location:" . $BASE_URL . "../index.php");

        // SELEÇÃO DE DADOS
        } else {
            
            $idcontato;
            //verifica se nao esta vazio 
            if(!empty($_GET)) {
                $idcontato = $_GET["idcontato"];
            }

            // Retorna o dado de um contato
            if(!empty($idcontato)) { // quando nao estiver vazio

                $query = "SELECT * FROM contatos WHERE idcontato = :idcontato";

                $stmt = $link->prepare($query);

                $stmt->bindParam(":idcontato", $idcontato);

                $stmt->execute(); 

                $contato = $stmt->fetch();
            
            } else {

            // Retorna todos os contatos
                $contatos = [];

                $query = "SELECT * FROM contatos";

                $stmt = $link->prepare($query);

                $stmt->execute();
                
                $contatos = $stmt->fetchAll();

            }

    }

    // FECHAR CONEXÃO
    $link = null;
    
    

    
    
?>