<?php

// Mantendo o estado com o cookies
// cookies sao string com informações
// maneira de guarda um dado e o usuario ir utilizando

setcookie("nome","Breno", time() + 3600);

if(isset($_COOKIE['nome'])){
    $nome = $_COOKIE['nome'];
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
    <h1>Ola mundo</h1>
    <?php if($nome != ""):?>
        <p>Ola seja muito bem vindo <?= $nome ?> </p>
        <?php endif; ?>
</body>
</html>