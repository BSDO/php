<?php 

    require_once("models/users.php");
    require_once("models/message.php");
    require_once("conexao.php");

  
    class UserDao implements UserDaoInterface{

        private $link;
        private $url;

        private $message;

        public function __construct(PDO $link,$url){
            $this->link = $link;
            $this->url = $url;
            $this->message = new Message($url);

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


        // inserir no banco
        public function create(Users $user,$authUser = false)
        {   
            
            $stmt = $this->link->prepare("INSERT INTO users (
                nome, sobrenome, email, senha, token
            ) VALUES (
                :nome, :sobrenome, :email, :senha, :token
            )");

            $stmt->bindParam(":nome", $user->nome);
            $stmt->bindParam(":sobrenome", $user->sobrenome);
            $stmt->bindParam(":email", $user->email);
            $stmt->bindParam(":senha", $user->senha);
            $stmt->bindParam(":token", $user->token);

            $stmt->execute();
            
            //autenticar usuario
            if($authUser){
                $this->setTokenSession($user->token);
            }
             
        }

        public function update(User $user){

        }
        public function findByToken($token){
            if($token !=  ""){
            
                $stmt = $this->link->prepare("SELECT * FROM users WHERE token = :token");
                $stmt->bindParam(":token", $token);
                $stmt->execute();
                
                if($stmt->rowCount() > 0){
                    $data = $stmt->fetch();
                    $user = $this->buildUser($data);
                    return $user;
                }else{
                    return false;
                }


            }else{
                return false;
            }
        }
        public function verifyToken($protecao = false){

            if(!empty($_SESSION["token"])){
                $token = $_SESSION["token"];

                $user = $this->findByToken($token);

                if($user){
                    return $user;
                }
                else if($protecao){
                    
                    // usuario nao autenticado
                    $this->message->setMessage("Faça a autenticação para acessar a página!","error","index.php");
                }
                     
            } else if($protecao){
                    
                    // usuario nao autenticado
                    $this->message->setMessage("Faça a autenticação para acessar a página! ","error","index.php");
                }

        }
        public function destroyToken(){
            // remove token 
            $_SESSION["token"] = "";


            //redirecionar para mensagem de sucesso
            $this->message->setMessage("Logout concluido! ","sucess","index.php");

        }


        // Enviado para uma sessao assim que cadastrar
        public function setTokenSession($token, $redirecionar = true){
           
             $_SESSION["token"] = $token;

            if($redirecionar){

                //perfil do usuario
                $this->message->setMessage("Seja-bem vindo","sucess","editorprofile.php");

            }


        }
        public function autenticacaoUser($email,$senha){

        }
        // verifica se tem um email
        public function findByemail($email){

            if($email !=  ""){
            
                $stmt = $this->link->prepare("SELECT * FROM users WHERE email = :email");
                $stmt->bindParam(":email", $email);
                $stmt->execute();
                
                if($stmt->rowCount() > 0){
                    $data = $stmt->fetch();
                    $user = $this->buildUser($data);
                    return $user;
                }else{
                    return false;
                }


            }else{
                return false;
            }
        }
        public function findById($iduser){

        }
        public function trocarsenha(User $user){

        }

    }

?>