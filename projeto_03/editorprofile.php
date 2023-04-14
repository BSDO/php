<?php  

    require_once("templates/header.php");
    require_once("models/users.php");
    require_once("dao/UserDao.php");

    $user = new Users(); // chamada classe

    $userdado = new UserDao($link,$BASE_URL); // utiliza dados do banco

    $userdata = $userdao->verifyToken(true); // verificaçao de token

    $nomecompleto = $user->nomeCompleto($userdata); // passa os dados do usuarios como retorno a partir da autenticao


    if($userdata->imagem == ""){
        $userdata->imagem = "user.png";
    }


?>
    <div id="main-container" class="container-fluid">
        <div class="col-md-12">
        <form action="<?= $BASE_URL ?>user_process.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="type" value="update">
        <div class="row"> 
          <div class="col-md-4">
            <h1><?= $fullName ?></h1>
            <p class="page-description">Altere seus dados no formulário abaixo:</p>
            <div class="form-group">
              <label for="name">Nome</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome" value="<?= $userData->name ?>">
            </div>
            <div class="form-group">
              <label for="lastname">Sobrenome</label>
              <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Digite seu sobrenome" value="<?= $userData->lastname ?>">
            </div>
            <div class="form-group">
              <label for="email">E-mail:</label>
              <input type="email" class="form-control disabled" id="email" name="email" placeholder="Digite seu e-mail" readonly value="<?= $userData->email ?>">
            </div>
            <input type="submit" class="btn form-btn" value="Alterar">
          </div>
          <div class="col-md-4">
            <div id="profile-image-container" style="background-image: url('<?= $BASE_URL ?>img/users/<?= $userData->image ?>')"></div>
            <div class="form-group">
              <label for="image">Foto</label>
              <input type="file" name="image" class="form-control-file">
            </div>
            <div class="form-group">
              <label for="bio">Sobre você:</label>
              <textarea class="form-control" id="bio" name="bio" rows="5" placeholder="Conte quem você é, o que faz, onde trabalha..."><?= $userData->bio ?></textarea>
            </div>
          </div>    
        </div> 
      </form> 
    </div>
    </div>

<?php  
    include("templates/footer.php");
?>
    