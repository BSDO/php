<?php
    include("config.php");
    include("dao/CarDao.php");

    $car = new CarDao($link);

    $marca = $_POST["marca"];
    $km = $_POST["km"];
    $color = $_POST["color"];


    $newcar = new Car();

    $newcar->setMarca($marca);
    $newcar->setKm($km);
    $newcar->setColor($color);

    $car->InsertValida($newcar);

    header ("Location: index.php")
?>