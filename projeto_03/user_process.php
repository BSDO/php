<?php
    
    require_once("globals.php");
    require_once("conexao.php");
    require_once("models/users.php");
    require_once("models/message.php");
    require_once("dao/UserDao.php");

    $message = new Message($BASE_URL);

    $userDao= new UserDao($link, $BASE_URL);
    $user = new Users();

    // resgatar o tipo de formulario
    $type = filter_input(INPUT_POST,"type");

    //atualiza dados do usuario
    if($type === "Alterar"){

        // resgatar dados do usuario
        $userdata = $userDao->verifyToken();

        $user = new Users();

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
           $jpgtipo = ["imagem/jpeg","imagem/jpg"];
 

           //Verifica se o array de imagem nao esta vazio com os tipos definidos
           if(isset($_FILES["imagem"]) && !empty($_FILES["imagem"]["tmp_name"])) {
      
            $imagem = $_FILES["imagem"];
            $imageTypes = ["imagem/jpeg", "imagem/jpg", "imagem/png"];
            $jpgArray = ["imagem/jpeg", "imagem/jpg"];
      
            // Checagem de tipo de imagem
            if(in_array($imagem["type"], $imageTypes)) {
      
              // Checar se jpg
              if(in_array($imagem, $jpgArray)) {
      
                $imageFile = imagecreatefromjpeg($imagem["tmp_name"]);
      
              // Imagem é png
              } else {
      
                $imageFile = imagecreatefrompng($imagem["tmp_name"]);
      
              }
      
              $imageName = $user->imageGenerateName();
      
              imagejpeg($imageFile, "./img/users/" . $imageName, 100);
      
              $userData->imagem = $imageName;
      
            } else {
      
              $message->setMessage("Tipo inválido de imagem, insira png ou jpg!", "error", "back");
      
            }
      
          }




        }

        // atualiza os dados do usuario

        $userDao->update($userdata);


      


    }else if($type === "alterarsenha"){

        $userdata = $userDao->verifyToken();

        $iduser = $userdata->iduser;
        
        $senha = $_POST["senha"];
        $confirmasenha = $_POST["confirmasenha"];

        if($senha == $confirmasenha){

            $user =  new Users();

            $finalsenha = $user->gerarSenha($senha);
            
            $user->senha = $finalsenha;
            $user->iduser = $iduser;

            $userDao->trocarsenha($user);


        }else{
            $message->setMessage("Senha diferentes!","error","back"); 
        }

    }else{
        $message->setMessage("Email ja cadastrado!","error","back"); 
    }




?>