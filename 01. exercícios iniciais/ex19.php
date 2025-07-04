<?php 
/* 
Crie uma função chamada calcularPrecoFinal que receba dois valores do tipo float:
- $preco
- $desconto (em porcentagem, ex: 10 para 10%)

Retorne o valor final com desconto e exiba-o no HTML dentro de uma tag <p> formatada com duas casas decimais.
*/

declare(strict_types=1);

    function calcularPrecoFinal(float $preco, float $desconto): float {
        return $preco - ($preco *  $desconto / 100);
    }

    $preco = 2000.0;
    $desconto = 7.0;
    $final = calcularPrecoFinal($preco, $desconto);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 19: Funções</title>
</head>
<body>
    <p>R$ <?= number_format($final, 2, ',', '.')?></p>
</body>
</html>