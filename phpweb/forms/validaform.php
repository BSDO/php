<?php

$validacoes = [];


if(count($_POST) > 0){

    if(isset($_POST['name']) ){
        $validacoes[] = "Por favor preencha!";

    }   


}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <?php if(count($validacoes)): ?>
        <ul>
            <?php foreach($validacoes as $validar):?>
             <li> <?= $validar ?> </li>
            <?php endforeach; ?>
    
        </ul>
       
    
    
    <form action="validaform.php" method="POST">
        <div>
            <input type="text" name="name">
        </div>
        <div>
            <input type="passoword" name="senha">
        </div>
        <div>
            <input type="submit" name="enviar">
        </div>

    </form>
    
</body>
</html>