<?php 
    require_once("globals.php");
    require_once("conexao.php");
    require_once("models/user.php");
    require_once("models/message.php");
    require_once("dao/UserDao.php");

    $messagem = new Message($BASE_URL);


    $tipo = filter_input(INPUT_POST, "type");
  
    //verifica nosso tipo de formulario
    if($tipo == "registrar"){
        
        $nome = filter_input(INPUT_POST,"nome");
        $sobrenome = filter_input(INPUT_POST,"sobrenome");
        $email = filter_input(INPUT_POST,"email");
        $senha = filter_input(INPUT_POST,"senha");
        $confirmasenha = filter_input(INPUT_POST,"confirmasenha");

        //verifica dados principais
        if($nome && $sobrenome && $email && $senha){
            
            if($senha === $confirmasenha){
                echo "helllo";
            } 

        } else{
            $messagem->setMessage("Por favor,preencha todos os campos","error" ,"back");

        }
    }
    else if($tipo == "login"){

    }

?>