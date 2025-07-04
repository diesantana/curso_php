<?php

    /* 
    1. Constrói um array com todos os resultados da tabuáda do 327 de até 10.
    2. Apresenta os dados do array com um ciclo foreach (apenas os valores)
    */
    $tabuada_327 = [];
    for($i = 1; $i <= 10; $i++) {
        array_push($tabuada_327, 327 * $i);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($tabuada_327 as $value): ?>
        <p><?= $value;?></p>
    <?php endforeach;?>
</body>
</html>