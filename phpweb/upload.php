<?php

// enviar arquvios para o servidors muda ase o enctype do forms para -> multipart/formt-data
// arquivos ficam em $files

if(isset($_FILES)){
    
    print_r($_FILES);
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
    <form action="upload.php" method="POST"  enctype="multipart/form-data"> 
        <div>
            <input type="file" name="imagem">
        </div>
        <div>
            <input type="submit" value="enviar">
        </div>


    </form>
    
</body>
</html>
