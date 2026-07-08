<?php
/*Um organizador recebeu R$ 18.000,00 para realizar um evento e gastou R$
12.750,00 com fornecedores. Calcule quanto dinheiro ainda restou.
Resultado esperado: após gastar R$ 12.750,00 de um orçamento de
R$ 18.000,00, restam R$ 5.250,00*/

// entrada - variáveis
$entrada = 18000.00;
$gastos = 12750.00;

// processamento
$restante = $entrada - $gastos;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>Atividade 4 </h3>

    <p>
        Um organizador recebeu R$ 18.000,00 para realizar um evento e gastou R$
        12.750,00 com fornecedores. Calcule quanto dinheiro ainda restou.
        Resultado esperado: após gastar R$ 12.750,00 de um orçamento de
        R$ 18.000,00, restam R$ 5.250,00.
    </p>

    <p> <?php echo ("RESTANTE: " . $restante); ?> </p>

</body>

</html>