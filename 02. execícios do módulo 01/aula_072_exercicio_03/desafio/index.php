<?php

    // Divide dois números e retorna o resultado
    // Caso $value2 seja 0, retorna null
    function division($value1, $value2) {
        if($value2 == 0) return null;
        return $value1 / $value2;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Nível 1 - Exercício 02</title>
</head>

<body>

    <?php for ($i = 0; $i <= 20; $i++) : ?>

        <?php 
            $valor1 = rand(0,10);
            $valor2 = rand(0,10);
            $result = division($valor1, $valor2) ?? 'Divisão por zero';
        ?>

        <!-- apresentar os valores aqui -->
        <p><?= "$valor1 : $valor2 = $result"  ?></p>
         

    <?php endfor; ?>


</body>

</html>