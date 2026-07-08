<?php
/*Um buffet cobra R$ 85,00 por pessoa para fornecer alimentação durante um
evento. Crie variáveis para armazenar a quantidade de convidados e calcule o
valor total do buffet.
Resultado esperado: 120 convidados a R$ 85,00 precisam gerar um orçamento
de R$ 10.200,00.*/

// entrada - variáveis
$qtdConvidados = 120;
$valorPessoa = 85.00;

// processamento
$orcamento = $qtdConvidados * $valorPessoa;

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

    <p> <?php echo ("ORÇAMENTO: R$ " . $orcamento ); ?> </p>

</body>

</html>