<?php
    include_once("helpers/url.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG CODAR</title>
    <link  href="css/style.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;0,800;0,900;1,800&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <a href="<?$BASE_URL?>" id="logo" >
            <img src="img/logo.svg" alt="blog codar"> 
        </a>
        <nav>
            <ul id="navbar">
                <li><a href=" index.php" class="nav-link">HOME</a></li>
                <li><a href="#" class="nav-link">Categorias</a></li>
                <li><a href="#" class="nav-link">Sobre</a></li>
                <li><a href="contato.php" class="nav-link">Contatos</a></li>
            </ul>
        </nav>
    </header>
