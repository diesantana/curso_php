<?php
    $frutas = ['Uva', 'Maça', 'Banana', 'Morango', 'Laranja'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 20</title>
</head>
<body>
    <h2>Frutas</h2>
    <ul>
        <?php foreach($frutas as $fruta):?>
            <li><?= $fruta?></li>
        <?php endforeach;?>
    </ul>
</body>
</html>