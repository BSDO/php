<?php
    include("templates/header.php");
?>
    <div class="container" id="view-contatos">
        <a href="<?=$BASE_URL?>index.php" id="back-index">Voltar</a>
        <h1 id="main-title-dado">Editar dados</h1>
        <label>Nome:</label>
        <p><?=$contact["nome"];?></p>
        <label>Telefone:</label>
        <p><?=$contact["telefone"];?></p>
        <label>Obs:</label>
        <p><?=$contact["observacao"];?></p>                 
    </div>
<?php
    include("templates/footer.php");
?>


