<?php 

    require_once("globals.php");
    require_once("conexao.php");
    require_once("models/movie.php");
    require_once("models/message.php");
    require_once("dao/UserDao.php");
    require_once("dao/FilmeDao.php");
    
    $filmeDao =  new FilmeDao($link,$BASE_URL);

    $userDao = new UserDao($link,$BASE_URL); // utiliza dados do banco
    
    //Verifica se o usuario esta logado
    $userData = $userDao->verifyToken(); 

    $message = new Message($BASE_URL);

    $tipo = filter_input(INPUT_POST, "type");

    if($tipo === "create"){

        $titulo = $_POST["titulo"];
        $tamanhofilmes = $_POST["tamanhofilmes"];
        $categoria = $_POST["categoria"];
        $trailer = $_POST["trailer"];
        $descricao = $_POST["descricao"];

        $filme = new Filmes();

        if(!empty($titulo) && !empty($categoria) && !empty($descricao)){

            $filme->titulo = $titulo;
            $filme->tamanhofilmes = $tamanhofilmes;
            $filme->categoria = $categoria;
            $filme->trailer = $trailer;
            $filme->descricao = $descricao;
            $filme->iduser = $userData->iduser;


            /*upload de imagem filme
            if($_FILES["image"] && $_FILES["image"]["tmp_name"]){
                
                $image = $_FILES["image"];
                $imagemtype = ["image/jpeg", "image/jpg","image/png"];
                $jpgArray= ["image/jpeg", "image/jpg"];

                Verificar o tipo
                if(isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])) {

                    $image = $_FILES["image"];
                    $imageTypes = ["image/jpeg", "image/jpg", "image/png"];
                    $jpgArray = ["image/jpeg", "image/jpg"];
            
                    Checando tipo da imagem
                    if(in_array($image["type"], $imageTypes)) {
            
                      // Checa se imagem é jpg
                      if(in_array($image["type"], $jpgArray)) {
                        $imageFile = imagecreatefromjpeg($image["tmp_name"]);
                      } else {
                        $imageFile = imagecreatefrompng($image["tmp_name"]);
                      }
            
                      // Gerando o nome da imagem
                      $imageName = $movie->imageGenerateName();
            
                      imagejpeg($imageFile, "./img/movies/" . $imageName, 100);
            
                      $filme->image = $imageName;
            
                    }*/

            if(isset($_FILES["image"])){

                $arquivo = $_FILES["image"];

                //diretorio dos arquivos
                $pasta_dir = "img/movies/";

                // Faz o upload da imagem
                $arquivo_nome = $pasta_dir . $arquivo["image"];

                //salva no banco
                 move_uploaded_file($arquivo["image"], $arquivo_nome);              
                    
                   
                }
                else{
                    $message->setMessage("Tipo invalido de imagem","error","back"); 
                }
                
            

            print_r($_POST); 
            print_r($_FILES);
            exit;
            $filmeDao->create($filme);



        }else{
            $message->setMessage("Dados vazios,por favor preencha!","error","back"); 
        }




        }else{
        $message->setMessage("Email ja cadastrado!","error","back"); 
        }
?>