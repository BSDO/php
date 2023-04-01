<?php
     include('templates/header.php');
?>
    <div class="container" id="view-contatos">
        <a href="<?=$BASE_URL?>index.php" id="back-index">Voltar</a>
        <h1 id="main-title"> Criar contato</h1>
        <form action="<?=$BASE_URL?>config/processamento.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label class="lbl" for="nome">Nome do contato: </label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required>
            </div>
            <div class="form-group">
                <label class="lbl" for="telefone">Telefone: </label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite seu telefone" required>
            </div>
            <div class="form-group">
                <label class="lbl" for="observacao">Obersavação: </label>
                <input type="text" row="3" class="form-control" id="observacao" name="observacao"></input>
            </div>
            <button type="submit" id="btn" class="btn btn-primary">Cadastrar
                <a href="<?=$BASE_URL?>index.php"></a>
            </button>
        </form>



    </div>
<?php 
    include('templates/footer.php');
?>