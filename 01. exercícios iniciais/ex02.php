<!-- 
Crie um script PHP que receba uma variável `$status` com um dos seguintes valores:
- pago
- pendente
- cancelado

Use a estrutura `match` para retornar um texto descritivo 
diferente para cada status e exibi-lo dentro de um parágrafo HTML.

Se o valor não for nenhum dos anteriores, exiba "Status inválido."
-->

<?php
    // $status = 'pago';
    $status = 'pendente';
    // $status = 'cancelado';
    // $status = 'outro';

    $statusMessage = match ($status) {
        'pago' => 'Pagamento concluído com sucesso!',
        'pendente' => 'O pagamento está pendente. Aguardando confirmação.',
        'cancelado' => 'Pedido cancelado!',
        default => 'Status inválido.'
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01: Match</title>
</head>
<body>
    <h2>Status do pedido</h2>
    <p><?= $statusMessage ?></p>
</body>
</html>