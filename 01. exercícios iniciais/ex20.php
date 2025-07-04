<?php 
/* 
Crie dados.php que retorna um array. 
Em index.php, capture os dados com require_once e exiba em uma lista HTML.
- Dados: ['joao', 'ana', 'carlos', 'antónio', 'sara', 'maria'];
*/

    $data = require_once 'ex20_dados.php';
    $totalItems = count($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 20: Include e require</title>
</head>
<body>
    <ul>
        <?php for($i = 0; $i < $totalItems; $i++):?>
            <li><?= $data[$i]?></li>
        <?php endfor;?>
    </ul>
</body>
</html>