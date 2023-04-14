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

        public function gerarToken(){
            return bin2hex(random_bytes(50));
        }

        public function password_hash($senha){
            return password_hash($senha , PASSWORD_DEFAULT);
        }


    }

    interface UserDaoInterface{
        public function buildUser($data);
        public function create(Users $user,$authUser = false);
        public function update(User $user);
        public function findByToken($token);
        public function verifyToken($protecao = false);
        public function destroyToken();
        public function setTokenSession($token, $redirecionar = true);
        public function autenticacaoUser($email,$senha);
        public function findByemail($email);
        public function findById($iduser);
        public function trocarsenha(User $user);

    }


?>