<?php
/*
    Um organizador comprou um notebook por R$ 3.800,00 e pagou com
    R$ 5.000,00. Calcule o valor do troco.
    Resultado esperado: após pagar R$ 5.000,00 por um notebook de 
    R$ 3.800,00, o troco será de R$ 1.200,00.
*/

// entradas - variáveis
$pagamento = 5000.00;
$valorNotebook = 1200.00;

// processamento
$custoTotal = $pagamento - $valorNotebook;
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3> Atividade 07 </h3>

    <p>
        Um organizador comprou um notebook por R$ 3.800,00 e pagou com
        R$ 5.000,00. Calcule o valor do troco.
        Resultado esperado: após pagar R$ 5.000,00 por um notebook de
        R$ 3.800,00, o troco será de R$ 1.200,00.

    </p>

    <p> <?php echo ("PAGAMENTO: R$ " . $pagamento); ?></p>
    <p> <?php echo ("VALOR DO NOTEBOOK: R$ " . $valorNotebook); ?></p>
    <p> <?php echo ("CUSTO TOTAL: R$ " . $custoTotal); ?></p>

</body>

</html>