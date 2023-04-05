<?php 

    require_once("models/user.php");
    require_once("conexao.php");

    class UserDao implements UserDaoInterface{

        private $link;
        private $url;

        public function __construct(PDO $link,$url){
            $this->link = $link;
            $this->url = $url;
        }

        public function buildUser($data){
            $usermodels = new Users();

            $usermodels->iduser = $data["iduser"];
            $usermodels->nome = $data["nome"];
            $usermodels->sobrenome = $data["sobrenome"];
            $usermodels->email = $data["email"];
            $usermodels->senha = $data["senha"];
            $usermodels->imagem = $data["imagem"];
            $usermodels->token = $data["token"];
            $usermodels->bio = $data["bio"];

            return $usermodels;
        }


        public function create(User $user,$authUser = false){

        }
        public function update(User $user){

        }
        public function findByToken($token){

        }
        public function verifyToken($protecao = false){

        }
        public function setTokenSession($token, $redirecionar = true){

        }
        public function autenticacaoUser($email,$senha){

        }
        public function findByemail($email){

        }
        public function findById($iduser){

        }
        public function trocarsenha(User $user){

        }

    }

?>