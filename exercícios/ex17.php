<?php 
/*Crie uma função `exibirSaudacao` que receba um nome e exiba uma frase de boas-vindas. 
Se nenhum nome for informado, use o valor padrão "Visitante". 
Mostre a mensagem dentro de uma tag <h2> no HTML.*/

    declare(strict_types=1);
    function exibirSaudacao(string $nome = 'Visitante'): string {
        return "Bem vindo, $nome!";
    }

    $saudacao = exibirSaudacao('Bob');
    // $saudacao = exibirSaudacao();
    // $saudacao = exibirSaudacao(1408);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 17: funções</title>
</head>
<body>
    <h2><?= $saudacao?></h2>
</body>
</html>