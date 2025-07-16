<?php

    // Valores que não podem fazer parte da coleção
    $valuesNotAccepted = [10,20,30,40,50,60,70,80, 90];


    /**
     * Gera uma quantidade especificada de valores aleatórios únicos
     * entre 1 e 100, excluindo os valores não aceitos
     * 
     * @param int $amountValues Quantidade de valores a serem gerados
     * @param array $valuesNotAccepted (Opcional) Valores que não podem fazer parte da coleção
     * @return array Coleção de valores únicos gerados
     */
    function generateUniqueValues($amountValues, $valuesNotAccepted = []) {
        $values = [];

        while(count($values) < $amountValues) {
            $currentValue = rand(1, 100);

            // Ignora valores já utilizado ou não aceitos
            if(in_array($currentValue, $values)) continue; 
            if(in_array($currentValue, $valuesNotAccepted)) continue; 
            
            // Adiciona o valor ao resultado
            $values[] = $currentValue;
        }

        return $values;
    }

    // Gera 20 valores aleatórios únicos, excluindo os não aceitos
    $values = generateUniqueValues(20, $valuesNotAccepted);

    // Ordena os valores em ordem crescente
    sort($values);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
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