<?php  

    require_once("templates/header.php");
    require_once("models/users.php");
    require_once("dao/UserDao.php");

    $user = new Users(); // chamada classe

    $userdado = new UserDao($link,$BASE_URL); // utiliza dados do banco

    $userData = $userdado->verifyToken(true); // verificaçao de token

    $nomecompleto = $user->nomeCompleto($userData); // passa os dados do usuarios como retorno a partir da autenticao


    if($userData->imagem == "")
    {
        $userData->imagem = "user.png";
    }


?>
    <div id="main-container" class="container-fluid">
        <div class="col-md-12">
			<form action="<?= $BASE_URL ?>user_process.php" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="type" value="Alterar">
				<div class="row"> 
					<div class="col-md-4">
						<h1><?= $nomecompleto ?></h1>
						<p class="page-description">Altere seus dados no formulário abaixo:</p>
						<div class="form-group">
							<label for="nome">Nome</label>
							<input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" value="	<?= $userData->nome ?>">
						</div><br>
						<div class="form-group">
							<label for="sobrenome">Sobrenome</label>
							<input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Digite seu sobrenome" value="<?= $userData->sobrenome ?>">
						</div><br>
						<div class="form-group">
							<label for="email">E-mail:</label>
							<input type="email" class="form-control" readonly id="email" name="email" placeholder="Digite seu e-mail" readonly value="<?= $userData->email ?>">
						</div><br>
						<input type="submit" class="btn btn-warning form-control" value="Alterar">
					</div>
					<div class="col-md-4">
						<div class="form-group">
						 	<div id="profile-imagem-container" style="background-image: url('<?= $BASE_URL ?>img/users/<?= $userData->imagem ?>  ')"></div>
						</div>

						<div class="form-group">
							<label for="imagem">Foto</label>
							<input type="file" name="imagem" class="form-control-file">
						</div><br>
						<div class="form-group">
							<label for="bio">Sobre você:</label></br>
							<textarea class="form-control" id="bio" name="bio" rows="5" placeholder="Conte quem você é, o que faz, onde trabalha..." ><?= $userData->bio ?></textarea>
						</div>
					</div>    
				</div> 
			</form></br>

			<div class="row" id="change-password-container">
				<div class="col-md-4">
					<h2>Alterar senha:</h2>
					<p class="page-description">Digite a nova senha: </p>
					<form action="<?= $BASE_URL ?>user_process.php" method="POST">
						<input type="hidden" name="type" value="alterarsenha">						
						<div class="form-group">
							<label for="senha">Senha:</label>
							<input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
						</div><br>	
						<div class="form-group">
							<label for="senha">Confirma senha:</label>
							<input type="password" class="form-control" id="confirmasenha" name="confirmasenha" placeholder="Confirme sua senha">
						</div><br>	
						<input type="submit"class="btn btn-warning form-control" value="Alterar senha">					
					</form>
				</div>							
			</div>
   		</div>
    </div>

<?php  
    include("templates/footer.php");
?>
    