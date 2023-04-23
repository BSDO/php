<?php
    
    require_once("globals.php");
    require_once("conexao.php");
    require_once("models/users.php");
    require_once("models/message.php");
    require_once("dao/UserDao.php");

    $message = new Message($BASE_URL);

    $userDao= new UserDao($link, $BASE_URL);

    // resgatar o tipo de formulario
    $type = filter_input(INPUT_POST,"type");

    //atualiza dados do usuario
    if($type === "Alterar"){

        // resgatar dados do usuario
        $userdata = $userDao->verifyToken();

        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $bio = $_POST["bio"];
      
        // Atualiza os dados que vem do banco
        $userdata->nome = $nome;
        $userdata->sobrenome = $sobrenome;
        $userdata->email = $email;
        $userdata->bio = $bio;

        // Verifica se a imagem subiu e o nome temporario dela
        if(isset($_FILES["imagem"]) && !empty($_FILES["imagem"]["tmp_name"])){
           
           $imagem = $_FILES["imagem"];

           $tipos = ["imagem/jpeg","imagem/jpg","imagem/png"];


           //Verifica se o array de imagem nao esta vazio com os tipos definidos
           if(in_array($imagem["type"],$tipos)){


           }else{
                //Apresenta um erro caso nenhum tipo de arquivo que foi definido 
                $message->setMessage("Tipo invalido","error","back"); 
           }




        }

        // atualiza os dados do usuario

        $userDao->update($userdata);


      


    }else if($type === "alterarsenha"){

            

    }else{
        $message->setMessage("Email ja cadastrado!","error","back"); 
    }




?>