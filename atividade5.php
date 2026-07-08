<?php
/*
    Uma empresa oferece 10% de desconto para pagamento à vista. Um serviço
    custa R$ 4.500,00. Calcule o valor do desconto e o valor final.
    Resultado esperado: um desconto de 10% sobre R$ 4.500,00 corresponde a R$
    450,00, totalizando R$ 4.050,00.
*/

// entradas - variáveis
$servico = 4500.00;
$desconto = $servico * 10 / 100;

// processamento
$valorComDesconto = $servico - $desconto;
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3> Atividade 05 </h3>

    <p>
        Uma empresa oferece 10% de desconto para pagamento à vista. Um serviço
        custa R$ 4.500,00. Calcule o valor do desconto e o valor final.
        Resultado esperado: um desconto de 10% sobre R$ 4.500,00 corresponde a R$
        450,00, totalizando R$ 4.050,00.
    </p>

    <p> <?php echo ("SERVIÇO: R$ " . $servico); ?></p>
    <p> <?php echo ("DESCONTO: R$ " . $desconto); ?></p>
    <p> <?php echo ("VALOR COM DESCONTO: R$ " . $valorComDesconto); ?></p>  

</body>

</html>