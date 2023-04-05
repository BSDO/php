<?php  
    include("templates/header.php");
?>

    <div id="main-container" class="container-fluid">
        <div class="col-md-12">
            <div class="row" id="auth-row">
                    <div class="col-md-4" id="login-container">
                        <h2 class="">Entrar</h2>
                        <form class="form" action="<?=$BASE_URL?>autenticacao.processa.php" method="POST">
                        <input type="hidden" name="type" value="login">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div><br>
                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha">
                            </div><br>
                            <div class="form-group">
                                <input type="submit" class="btn btn-outline-warning form-control" value="Entrar">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4" id="criar-container">
                        <h2 class="">Criar conta</h2>
                        <form class="form" action="<?=$BASE_URL?>autenticacao.processa.php" method="POST">
                        <input type="hidden" name="type" value="registrar">
                            <div class="form-group">
                                <label for="email">Nome</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div><br>
                            <div class="form-group">
                                <label for="sobrenome">Sobrenome</label>
                                <input type="text" class="form-control" id="sobrenome" name="sobrenome">
                            </div><br>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div><br>
                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha">
                            </div><br>
                            <div class="form-group">
                                <label for="confirmasenha">Confirma senha</label>
                                <input type="password" class="form-control" id="confirmasenha" name="confirmasenha">
                            </div><br>
                            <div class="form-group">
                                <input type="submit" class="btn btn-outline-warning form-control" value="Registrar">
                            </div>
                        </form>
                    </div>    
               
            </div>
        </div>
    </div>

<?php  
    include("templates/footer.php")
?>
    