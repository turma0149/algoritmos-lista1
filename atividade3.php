<?php
/*Uma empresa de decoração cobra R$ 2.500,00 pelo serviço completo. O cliente
pagou uma entrada de R$ 1.000,00. Calcule quanto ainda falta pagar.
Resultado esperado: um serviço de R$ 2.500,00 com entrada de R$ 1.000,00
possui saldo de R$ 1.500,00*/

// entrada - variáveis
$servicoCompleto = 2500.00;
$entrada = 1000.00;

// processamento
$saldo = $servicoCompleto - $entrada;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>Atividade 3 </h3>

    <p>
        Uma empresa de decoração cobra R$ 2.500,00 pelo serviço completo. O cliente
        pagou uma entrada de R$ 1.000,00. Calcule quanto ainda falta pagar.
        Resultado esperado: um serviço de R$ 2.500,00 com entrada de R$ 1.000,00
        possui saldo de R$ 1.500,00
    </p>

    <p> <?php echo ("SALDO: R$ " . $saldo); ?> </p>

</body>

</html>