<?php  
    include("templates/header.php")
?>

    <div id="main-container" class="container-fluid">
        <div class="col-md-12">
            <div class="row" id="auth-row">
                
                    <div class="col-md-4" id="login-container">
                        <h2 class="">Entrar</h2>
                        <form class="form" action="" method="POST">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div><br>
                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha">
                            </div><br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-warning form-control" id="entrar" name="entrar">Entrar</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4" id="criar-container">
                        <h2 class="">Criar conta</h2>
                        <form class="form" action="" method="POST">
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
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div><br>
                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha" required>
                            </div><br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-warning form-control" id="registrar" name="registrar" value="registrar">Registrar</button>
                            </div>
                        </form>
                    </div>    
               
            </div>
        </div>
    </div>

<?php  
    include("templates/footer.php")
?>
    