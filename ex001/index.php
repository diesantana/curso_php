<?php
/*
Crie um script PHP que, com base na variável `$dia`, exiba uma mensagem em HTML correspondente 
ao nome do dia da semana.

Considere os seguintes valores:

- 1 ou 7: "Final de semana"
- 2 a 6: "Dia útil"
- Qualquer outro valor: "Valor inválido"

A mensagem deve ser exibida dentro de uma tag <h2>
*/

    $dia = 7;
    $message = '';

    switch ($dia) {
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            $message = 'Dia útil';
            break;
        case 1:
        case 7:
            $message = 'Final de semana';
            break;
        default:
            $message = 'Valor inválido';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 - switch</title>
</head>
<body>
    <h2><?= $message?></h2>
</body>
</html>