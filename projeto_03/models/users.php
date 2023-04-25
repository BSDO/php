<?php
    class Users {

        public $iduser;
        public $nome;
        public $sobrenome;
        public $email;
        public $senha;
        public $imagem;
        public $token;
        public $bio;

        public function nomeCompleto($users){ // funçao que mostra o nome e sobrenome
            return $users->nome . " " . $users->sobrenome;
        }

        public function gerarToken(){
            return bin2hex(random_bytes(50));
        }

        public function gerarSenha($senha){
            return password_hash($senha , PASSWORD_DEFAULT);
        }

        public function imageGenerateName() {
            return bin2hex(random_bytes(60)) . ".jpg";
        }

    }

    interface UserDaoInterface{
        public function buildUser($data);
        public function create(Users $user,$authUser = false);
        public function update(Users $user,$redirecionar = true);
        public function findByToken($token);
        public function verifyToken($protecao = false);
        public function destroyToken();
        public function setTokenSession($token, $redirecionar = true);
        public function autenticacaoUser($email,$senha);
        public function findByemail($email);
        public function findById($iduser);
        public function trocarsenha(Users $user);

    }


?>