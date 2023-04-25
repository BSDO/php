<?php  
  
    require_once("templates/header.php");
    require_once("models/users.php");
    require_once("dao/UserDao.php");

    $user = new Users(); // chamada classe

    $userDao = new UserDao($link,$BASE_URL); // utiliza dados do banco

    $userData = $userDao->verifyToken(false); // verificaçao de token



?>

    <div id="main-container" class="container-fluid">
        <div class="offset-md-4 col-md-4 new-movie-container">
            <h1 class="page-title">
                Adicionar Filme
            </h1>
            <p class="page-description">
                Adicione sua crítica ao filme
            </p>
            <form action="<?=$BASE_URL?>movie_process.php" id="add-movie-form" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="type" value="create">
                <div class="form-group">
                    <label for="titulo">Título: </label>
                    <input type="text" class="form-control" name="titulo" placeholder="Digite o nome do filme">
                </div>
                <div class="form-group">
                    <label for="image">Imagem: </label>
                    <input type="file" class="form-control form-control-file" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="tamanhofilmes">Tamanho do filme: </label>
                    <input type="text" class="form-control" id="tamanhofilmes" name="tamanhofilmes">
                </div>
                <div class="form-group">
                    <label for="categoria">Categorias </label>
                    <select class="form-control" id="categoria" name="categoria">
                        <option value="">Selecione....</option>
                        <option value="Ação">Ação</option>
                        <option value="Drama">Drama</option>
                        <option value="Romance">Romance</option>
                        <option value="Terror">Terror</option>
                        <option value="Ficção">Ficção</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="trailer">Trailer </label>
                    <input type="text" class="form-control" id="trailer" name="trailer" placeholder="Digite o link do trailer">
                </div>
                <div class="form-group">
                    <label for="descricao">Descricão:</label>
                    <textarea name="descricao" id="descricao" rows="5" class="form-control"></textarea>
                </div>
                

                <input type="submit" class="btn btn-warning form-control" value="Adicionar Filme">
            </form>
        </div>
    </div>

<?php  
    include("templates/footer.php")
?>
    