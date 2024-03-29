<?php
    require_once("globals.php");
    require_once("conexao.php");
    require_once("models/message.php");
    require_once("dao/UserDao.php");

    $message = new Message($BASE_URL);

    $flassmsg = $message->getMessage();

    if(!empty($flassmsg["msg"])){
        $message->clearMessage();
    }

    $userdao = new UserDao($link,$BASE_URL);

    $userdados = $userdao->verifyToken(false);

    // print_r($userdados);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Star</title>
    <link rel="short icon" href="<?= $BASE_URL ?>img/moviestar.ico">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="<?= $BASE_URL ?>css/style.css">
    <!-- boostrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.css" integrity="sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <nav id="main-navbar" class="navbar navbar-expand-lg">
            <a href="<?=$BASE_URL?>" class="navbar-brand">
                <img src="<?=$BASE_URL?>img/logo.svg" alt="MovieStar" id="logo"> 
                <span id="moviestar-title">Movie Star</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <form action="<?= $BASE_URL ?>search.php" method="GET" id="search-form" class="form-inline my-2 my-lg-0">
                <input type="text" name="q" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar Filmes" aria-label="Search">
                <button class="btn my-2 my-sm-0" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                   <?php if($userdados): ?>                    
                    <li class="nav-item">
                        <a href="<?=$BASE_URL?>newmovie.php" class="nav-link">
                            <i class="far fa-plus-square"></i>Incluir filme
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a href="<?=$BASE_URL?>dashboard.php" class="nav-link">Meus filmes</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=$BASE_URL?>editorprofile.php" class="nav-link"><?= $userdados->nome ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=$BASE_URL?>logout.php" class="nav-link">Sair</a>
                    </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="<?=$BASE_URL?>auth.php" class="nav-link">Entrar / Cadastrar</a>
                        </li> 
                    <?php endif ?>  
                </ul>
            </div>
        </nav>
    </header>
    <?php if(!empty($flassmsg["msg"])): ?>  
        <div class="msg-container">
            <p class="msg <?= $flassmsg["type"]; ?>"><?= $flassmsg["msg"]; ?></p>
        </div>

    <?php endif;?>



