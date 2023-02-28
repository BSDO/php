<?php

$ranking = [
    "Breno"=>200,
    "jpse"=>330,
    "Nar"=>304,
    "Jaca"=>404
];

arsort($ranking);
?>

<h1>Ranking: </h1>
<ol>
<?php foreach($ranking as $pessoas => $pontuacao): ?>
<li><?=$pessoas ?> -> <?=$pontuacao?> pontos.</li> <!--imprimmindo na tela os dados da array em uma lista o nome e os ponto-->
<?php endforeach;?>
</ol>