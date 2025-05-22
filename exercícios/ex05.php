<!-- 
Crie um script PHP que, com base na variável `$dia`, 
exiba uma mensagem em HTML correspondente ao nome do dia da semana.

Considere os seguintes valores:
- 1: Domingo
- 2: Segunda-feira
- 3: Terça-feira
- 4: Quarta-feira
- 5: Quinta-feira
- 6: Sexta-feira
- 7: Sábado
- Qualquer outro valor: "Valor inválido."

A saída deve ser exibida dentro de uma **tag `<h2>`** no corpo do HTML.
-->
<?php
    $dia = 10;
    $message = '';

    switch ($dia) {
        case 1:
            $message = 'Domingo';
            break;
        case 2:
            $message = 'Segunda-feira';
            break;
        case 3:
            $message = 'Terça-feira';
            break;
        case 4: 
            $message = 'Quarta-feira';
            break;
        case 5:
            $message = 'Quinta-feira';
            break;
        case 6:
            $message = 'Sexta-feira';
            break;
        case 7:
            $message = 'Sabádo';
        default:
            $message = 'Valor inválido.';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05: Switch case</title>
</head>
<body>
    <h2><?= $message ?></h2>
</body>
</html>