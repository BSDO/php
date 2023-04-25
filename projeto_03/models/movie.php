<?php 

    class Filmes{
        public $idfilmes;
        public $titulo;

        public $descricao;
        public $image;

        public $trailer;
        public $categoria;
        public $tamanhofilmes;

        public $iduser;

        public function imageGenerateName() {
            return bin2hex(random_bytes(60)) . ".jpg";
        }



    }

    interface FilmesDaoInterface {

        public function buildMovie($data);
        public function findAll();
        public function getLatesFilmes();
        public function filmesCategorias($categoria);
        public function idFilmes($idfilmes);
        public function findById($idfilmes);
        public function findByTitulo($titulo);
        public function create(Filmes $filmes);
        public function update(Filmes $filmes);
        public function destroy($idfilmes);
       

    }










?>