<?php 
    require_once("models/movie.php");
    require_once("models/message.php");
    require_once("conexao.php");


    class FilmeDao implements FilmesDaoInterface{
        private $link;
        private $url;
        private $message;

        public function __construct(PDO $link,$url){
            $this->link = $link;
            $this->url = $url;
            $this->message = new Message($url);

        }

        
        public function buildMovie($data){

            $filmesmodels = new Filmes();

            $filmesmodels->idfilmes = $data["idfilmes"];
            $filmesmodels->titulo = $data["titulo"];
            $filmesmodels->descricao = $data["descricao"];
            $filmesmodels->image = $data["image"];
            $filmesmodels->trailer = $data["trailer"];
            $filmesmodels->categoria = $data["categoria"];
            $filmesmodels->tamanhofilmes = $data["tamanhofilmes"];
            $filmesmodels->iduser = $data["iduser"];

            return $filmesmodels;
        }
        public function findAll(){

        }
        public function getLatesFilmes(){

        }
        public function filmesCategorias($categoria){

        }
        public function idFilmes($idfilmes){

        }
        public function findById($idfilmes){

        }
        public function findByTitulo($titulo){

        }
        public function create(Filmes $filmes){
            
            $stmt = $this->link->prepare("INSERT INTO filmes(
                titulos, descricao, image, trailer, categoria,tamanhofilmes,iduser
            ) VALUES (
                :titulos, :descricao, :image, :trailer, :categoria,:tamanhofilmes,:iduser
            )");

            $stmt->bindParam(":titulo", $filmes->titulo);
            $stmt->bindParam(":descricao", $filmes->descricao);
            $stmt->bindParam(":image", $filmes->image);
            $stmt->bindParam(":trailer", $filmes->trailer);
            $stmt->bindParam(":categoria", $filmes->categoria);
            $stmt->bindParam(":tamanhofilmes", $filmes->tamanhofilmes);
            $stmt->bindParam(":iduser", $filmes->iduser);

            $stmt->execute();

            $this->message->setMessage("Filme adicionado com sucesso","sucess","index.php");
            

        }
        public function update(Filmes $filmes){

        }
        public function destroy($idfilmes){

        }
    }

?>