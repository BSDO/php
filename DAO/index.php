<?php
    include("config.php");
    include("dao/CarDao.php");

    $car = new CarDao($link);
    $carros = $car->findAll();


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
    <h1>Digite aqui</h1>    
    <form action="process.php" method="post">
    <div>
        <label for="marca"> Marca do carro:</label>
        <input type="text" name="marca">
    </div>
    <div>
        <label for="km"> KM:</label>
        <input type="text" name="km">
    </div>
    <div>
        <label for="color"> Cor:</label>
        <input type="text" name="color">
    </div>
        <button type="submit">Salvar</button>
    </form>
    <ul>
        <?php
            foreach($carros as $car){
        ?>
            <li> <?=$car->getMarca();?> - <?=$car->getColor();?> / <?=$car->getKm();?> </li>
        <?php
            }
        ?>
    </ul>
</body>
</html>