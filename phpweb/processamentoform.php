<?php

// processamento de formulario teoria

// enviado get e post
// get enviado na url (retorna algo) / buscas
// post enviado por segurança   / registros

    $nome= $_GET['nome']; // recebendo do formularios pra ser exebido;
    // isset para verifica se esta preenchido

?>

<h1>Ola Seja muito bem <?= $nome?></h1>