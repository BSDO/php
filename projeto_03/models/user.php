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
    }

    interface UserDaoInterface{
        public function buildUser($data);
        public function create(User $user,$authUser = false);
        public function update(User $user);
        public function findByToken($token);
        public function verifyToken($protecao = false);
        public function setTokenSession($token, $redirecionar = true);
        public function autenticacaoUser($email,$senha);
        public function findByemail($email);
        public function findById($iduser);
        public function trocarsenha(User $user);

    }


?>