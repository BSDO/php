<?php

// checar seu um valor foi enviado e exibir ele

    $usuario = [
        'nome' => 'Breno',
        'idade' => 20,
        'profissao' => 'Programador'
    ];

    if($usuario){
        $nome = $usuario['nome'];
        $idade = $usuario['idade'];
        $profissao = $usuario['profissao'];
    }




?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="">
        <div>
            <input type="text" name="nome" value="<?= $nome ?>">
        </div>
        <div>
            <input type="text" name="nome" value="<?= $idade?>">
        </div>
        <div>
            <input type="text" name="nome" value="<?= $profissao ?>">
        </div>
    </form>

    
</body>
</html>