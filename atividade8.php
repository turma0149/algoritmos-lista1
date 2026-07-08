<?php
/*
    Uma empresa pretende distribuir 500 brindes igualmente entre 25 equipes
    participantes de uma competição. Calcule quantos brindes cada equipe
    receberá.
    Resultado esperado: 500 brindes divididos entre 25 equipes resultam em 20
    brindes para cada equipe.
*/

// entradas - variáveis
$qtdBrindes = 500;
$qtdEquipes = 25;

// processamento
$qtdPorEquipe = $qtdBrindes / $qtdEquipes;
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3> Atividade 08 </h3>

    <p>
        Uma empresa pretende distribuir 500 brindes igualmente entre 25 equipes
        participantes de uma competição. Calcule quantos brindes cada equipe
        receberá.
        Resultado esperado: 500 brindes divididos entre 25 equipes resultam em 20
        brindes para cada equipe.

    </p>

    <p> <?php echo ("QUANTIDADE DE BRINDES: " . $qtdBrindes); ?></p>
    <p> <?php echo ("QUANTIDADE DE EQUIPES: " . $qtdEquipes); ?></p>
    <p> <?php echo ("QUANTIDADE POR EQUIPE: " . $qtdPorEquipe); ?></p>

</body>

</html>