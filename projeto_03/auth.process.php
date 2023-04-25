<?php 
    require_once("globals.php");
    require_once("conexao.php");
    require_once("models/users.php");
    require_once("models/message.php");
    require_once("dao/UserDao.php");

    $message = new Message($BASE_URL);

    $userDao = new UserDao($link, $BASE_URL);

    $tipo = filter_input(INPUT_POST, "type");
  
    //verifica nosso tipo de formulario
    if($tipo == "registrar"){
        
        $nome = filter_input(INPUT_POST, "nome");
        $sobrenome = filter_input(INPUT_POST, "sobrenome");
        $email = filter_input(INPUT_POST, "email");
        $senha = filter_input(INPUT_POST, "senha");
        $confirmasenha = filter_input(INPUT_POST, "confirmasenha");

        if($nome && $sobrenome && $email && $senha){
            
            if($senha === $confirmasenha){

                if($userDao->findByemail($email) === false){
                    
                    $user = new Users();

                    $userToken = $user->gerarToken();
                    $senhacript = $user->gerarSenha($senha);

                    $user->nome = $nome;
                    $user->sobrenome = $sobrenome;
                    $user->email = $email;
                    $user->senha = $senhacript;
                    $user->token = $userToken;

                    $auth = true;

                    $userDao->create($user,$auth);

                }else{
                    $message->setMessage("Email ja cadastrado!","error","back"); 
                }


            }else{
                $message->setMessage("Senhas não conferem!","error","back");
            }
            
        }else{
            $message->setMessage("Digite todos os campos!","error","back");
        }
    }
    else if($tipo == "login"){

        $email = filter_input(INPUT_POST, "email");
        $senha = filter_input(INPUT_POST, "senha");


        if($userDao->autenticacaoUser($email,$senha)){

            $message->setMessage("Seja bem-vindo","sucess","editorprofile.php");

        }else{
            $message->setMessage("Usuário e senha incorretos!","error","back");
        }

    }else{
        $message->setMessage("Informações incorretos!","error","index.php");
    
    }

?>