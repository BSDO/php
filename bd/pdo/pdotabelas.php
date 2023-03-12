<?php
    include('pdoconexao.php');

    //INSERIR DADOS COM PDO

// $inserir1 = $linkPdo->prepare("INSERT INTO usuarios (nome,idade) VALUES (:nome, :idade)");

// $nome = "Matheus";
// $idade = "30";

// $inserir1->bindParam(":nome",$nome);
// $inserir1->bindParam(":idade",$idade);

// $inserir1->execute();


// //ATUALIZANDO
// $id = 5;
// $nome = "CArlos";
// $idade = "20";

// $stm = $linkPdo->prepare("UPDATE usuarios SET nome = :nome , idade = :idade WHERE id = :id");

// $stm->bindParam(":id",$id);
// $stm->bindParam(":nome",$nome);
// $stm->bindParam(":idade",$idade);


// $stm->execute();


// SELECIONANDO DADOS
$id = 5;

$stmt = $linkPdo->prepare("SELECT * FROM usuarios WHERE id > :id");
$stmt->bindParam(":id",$id);

$stmt->execute();

$data = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($data);


?>