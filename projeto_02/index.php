<?php
     include("templates/header.php");
?>
   <div class="container">
        <?php if(isset($msg) && $msg != ''):?>
           <p id="msg"><?= $msg ?></p>
        <?php endif ?>
        <h1 id="main-title">Agenda de contatos</h1>
        <?php if(count($contatos) > 0): ?>
            <table class="table table-responsive" id="contatos-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">nome</th>
                        <th scope="col">telefone</th>
                        <th scope="col">Obersavação</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($contatos as $contacts)
                        {  
                    ?>
                        <tr>
                            <td scope="row" id="col-id"><?=$contacts["idcontato"];?></td >
                            <td scope="row"><?=$contacts["nome"];?></td >
                            <td scope="row"><?=$contacts["telefone"];?></td >
                            <td scope="row" ><?=$contacts["obersavacao"];?></td>
                            <td class="actions" >
                                <a href="<?=$BASE_URL?>dados.contato.php"><i class="fa fa-eye edit-icon"></i></a>
                                <a href="#"><i class="fa fa-edit edit-icon"></i></a>
                                <button type="submit" class="butao"><i class="fas fa-times delete-icon"></i></button>
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

