<?php
     include("templates/header.php");
     
?>
   <div class="container" id="index-container">

        <?php if(isset($msg) && $msg != ''):?>
           <p id="msg"><?= $msg ?></p>
        <?php endif ?>
        <h1 id="main-title">AGENDA DE CONTATOS</h1>
            <?php if(count($contact) > 0):
                
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
                            foreach($contact as $contacts)
                            {  
                        ?>
                            <tr>
                                <td scope="row" id="col-id"><?=$contacts["idcontato"];?></td >
                                <td scope="row"><?=$contacts["nome"];?></td >
                                <td scope="row"><?=$contacts["telefone"];?></td >
                                <td scope="row" ><?=$contacts["observacao"];?></td>
                                <td class="actions" >
                                    <a href="<?=$BASE_URL?>dados.contato.php?id=<?=$contact["id"];?>"><i class="fa fa-eye eye-icon"></i></a>
                                    <a href="<?=$BASE_URL?>editardados.php?id=<?=$contact["id"];?>"><i class="fa fa-edit edit-icon"></i></a>
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


<?php
    include('templates/footer.php')
?>    

