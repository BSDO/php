<?php
    include("templates/header.php");
?>
    <div class="container" id="view-contatos">
        <a href="<?=$BASE_URL?>index.php" id="back-index">Voltar</a>
        <h1 id="main-title-dado">Dados</h1>
        <label>Nome:</label>
        <p><?=$contato["nome"];?></p>
        <label>Telefone:</label>
        <p><?=$contato["telefone"];?></p>
        <label>Obs:</label>
        <p><?=$contato["observacao"];?></p>                 
    </div>
<?php
    include("templates/footer.php");
?>


