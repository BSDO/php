<?php

// Criar autoprocessamento que processa os dados e mostrar os inputs

$metodo = $_SERVER['REQUEST_METHOD'];// metodo de enviar e capturar dados

if(isset($_POST['nome'])){ // se post nome existir guarde na variavel nome
    $nome = $_POST['nome']; // recebendo o dado via um input e armazenando
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($metodo == 'GET'): // se o metodo for igual a um get executa o form
    ?>
            <form action="autoprocessamento.php" method="POST">
                <div>
                    <input type="text" name="nome" placeholder="digite seu nome">
                </div>
                <div>
                    <input type="submit" value="Enviar">
                </div>
            </form>
    <?php   
        else:
    ?>
        <h1> O seu nome <?= $nome ?> </h1> 
    <?php
        endif;
    ?>

</body>
</html>