<?php
/*
    Uma empresa de eventos contratou três fornecedores. O buffet custou
    R$ 8.500,00, a decoração R$ 2.800,00 e a sonorização R$ 3.200,00. 
    Calcule o valor total gasto.
    Resultado esperado: o custo total do evento deverá ser de R$ 14.500,00.
*/

// entradas - variáveis
$buffet = 8500.00;
$decoracao = 2800.00;
$sonorizacao = 3200.00;

// processamento
$custoTotal = $buffet + $decoracao + $sonorizacao;
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3> Atividade 06 </h3>

    <p>
        Uma empresa de eventos contratou três fornecedores. O buffet custou
        R$ 8.500,00, a decoração R$ 2.800,00 e a sonorização R$ 3.200,00. Calcule o
        valor total gasto.
        Resultado esperado: o custo total do evento deverá ser de R$ 14.500,00.

    </p>

    <p> <?php echo ("BUFFET: R$ " . $buffet); ?></p>
    <p> <?php echo ("DECORAÇÃO: R$ " . $decoracao); ?></p>
    <p> <?php echo ("SONORIZAÇÃO: R$ " . $sonorizacao); ?></p>
    <p> <?php echo ("CUSTO TOTAL: R$ " . $custoTotal); ?></p>
</body>

</html>