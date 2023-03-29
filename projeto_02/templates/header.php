<?php
    include("config/conexao.php");
    include("config/url.php");
    include("config/processamento.php");

    if(isset($_SESSION['msg']))
    {
        $msg = $_SESSION['msg'];
        $_SESSION['msg'] = '';


    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGENDA</title>

    <!-- BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?=$BASE_URL?>/css/style.css ">

</head>
<body>
  <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
          <img src="<?= $BASE_URL ?>img/logo.svg" alt="Agenda">
        </a>
        <div>
          <div class="navbar-nav">
              <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>index.php">Agenda</a>
              <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>create.php">Adicionar contato</a>
          </div>
        </div>
      </nav>    
  </header>


