<?php

    $fruits = ['Maçã','Laranja','Banana','Pêra','Mamão','Melancia','Melão'];
    $totalFruits = count($fruits);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
</head>
<body>
    <h1>Frutas</h1>
    <ul>
        <?php for($i =0; $i < $totalFruits; $i++): ?>
        <li><?= $fruits[$i]?></li>
        <?php endfor;?>
    </ul>
</body>
</html>