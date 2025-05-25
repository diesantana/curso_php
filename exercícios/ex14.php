<?php

    /* 
    Dada a coleção de nomes, apresenta toda a coleção excepto o nome cujo índice = 4 (maria)
    */

    $nomes = ['joao', 'ana', 'carlos', 'marco', 'maria', 'silvia', 'helena', 'ricardo'];
    $index_stop = 4;

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
    <h2>Nomes</h2>
    <ul>
        <?php foreach($nomes as $index => $nome):?>
            <?php if($index == 4) continue;?>
            <li><?= $nome?></li>
        <?php endforeach;?>
    </ul>
    

</body>
</html>