<?php
    // Gera uma quantidade x ($amountValues) de valores aleatórios únicos.
    // O retorno é um array contendo os valores randomicos
    function generateUniqueValues($amountValues) {
        $values = [];

        while(count($values) < $amountValues) {
            $currentValue = rand(1, 100);
            if(in_array($currentValue, $values)) continue; 
            // se o valor já existir no array ignora o cód abaixo é ignorado
            $values[] = $currentValue;
        }

        return $values;
    }

    $values = generateUniqueValues(20);
    // ordenando o array
    sort($values);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>

<body>
    <h1>Lista de valores:</h1>
    <ul>
        <?php foreach ($values as $value): ?>
        <li><?= $value ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>