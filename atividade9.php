<?php
/*
    Uma empresa de eventos oferece um bônus de 5% sobre o valor arrecadado para
    o gerente responsável. O evento arrecadou R$ 42.000,00. Calcule o valor do
    bônus.
    Resultado esperado: 5% de R$ 42.000,00 correspondem a um bônus de
    R$ 2.100,00.
*/

// entradas - variáveis
$porcentagem = 5;
$valorArrecadado = 42000.00;

// processamento
$bonus = $valorArrecadado * $porcentagem / 100;
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3> Atividade 09 </h3>

    <p>
        Uma empresa de eventos oferece um bônus de 5% sobre o valor arrecadado para
        o gerente responsável. O evento arrecadou R$ 42.000,00. Calcule o valor do
        bônus.
        Resultado esperado: 5% de R$ 42.000,00 correspondem a um bônus de
        R$ 2.100,00.

    </p>

    <p> <?php echo ("VALOR ARRECADADO : R$ " . $valorArrecadado); ?></p>
    <p> <?php echo ("PORCENTAGEM : R$ " . $porcentagem); ?></p>
    <p> <?php echo ("BONUS : R$ " . $bonus); ?></p>

</body>

</html>