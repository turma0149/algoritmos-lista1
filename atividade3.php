<?php
/*Uma empresa de decoração cobra R$ 2.500,00 pelo serviço completo. O cliente
pagou uma entrada de R$ 1.000,00. Calcule quanto ainda falta pagar.
Resultado esperado: um serviço de R$ 2.500,00 com entrada de R$ 1.000,00
possui saldo de R$ 1.500,00*/

// entrada - variáveis
$servicoCompleto = 2500.00;
$entrada = 85.00;

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

    <h3>Atividade 2 </h3>

    <p>
        Um buffet cobra R$ 85,00 por pessoa para fornecer alimentação durante um
        evento. Crie variáveis para armazenar a quantidade de convidados e calcule o
        valor total do buffet.
        Resultado esperado: 120 convidados a R$ 85,00 precisam gerar um orçamento
        de R$ 10.200,00.
    </p>

    <p> <?php echo ("SALDO" . $saldo ); ?> </p>

</body>

</html>