<?php
     include("templates/header.php");
     
?>
   <div class="container" id="index-container">

        <?php if(isset($msg) && $msg != ''):?>
           <p id="msg"><?= $msg ?></p>
        <?php endif ?>
        <h1 id="main-title">AGENDA DE CONTATOS</h1>
            <?php if(count($contatos) > 0):
                
            ?>
                <table class="table table-responsive" id="contatos-table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">nome</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Obersavação</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($contatos as $contato)
                            {  
                        ?>
                            <tr>
                                <td scope="row" id="col-id"><?=$contato["idcontato"];?></td >
                                <td scope="row"><?=$contato["nome"];?></td >
                                <td scope="row"><?=$contato["telefone"];?></td >
                                <td scope="row" ><?=$contato["observacao"];?></td>
                                <td class="actions" >
                                    <a href="<?= $BASE_URL ?>show.php?idcontato=<?= $contato["idcontato"] ?>"><i class="fas fa-eye check-icon"></i></a>
                                    <a href="<?= $BASE_URL ?>editardados.php?idcontato=<?= $contato["idcontato"] ?>"><i class="far fa-edit edit-icon"></i></a>
                                    <form class="form-delete" action="config/processamento.php" method="post">
                                        <input type="hidden" name="type" value="delete">
                                        <input type="hidden" name="idcontato" value="<?=$contato["idcontato"]?>">
                                        <button type="submit" class="butao"><i class="fas fa-times delete-icon"></i></button>
                                    </form>
                                </td>
                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                    
        <?php else: ?>
            <p id="empty-list-text">Ainda nao ha contatos na sua agenda, <a href="<?= $BASE_URL ?>create.php">Clique aqui para adicionar</a>.</p>
        <?php endif ?>
    </div>


<?php
    include('templates/footer.php')
?>    

