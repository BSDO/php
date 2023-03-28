<?php
    session_start();
    include("templates/header.php");
    include("config/processamento.php");

   

    
?>
    <div class="container" id="view-contatos">
        <a href="<?=$BASE_URL?>index.php" id="back-index">Voltar</a>
        <h1 id="main-title-dado">Editar dados</h1>
        <label>Nome:</label>
        <p><?=$contatos["nome"]?></p>
        <label>Telefone:</label>
        <p><?=$contatos["telefone"];?></p>
        <label>Obs:</label>
        <p><?=$contatos["obersavacao"]?></p>
            

                 
    </div>



<?php
    include("templates/footer.php");
?>


