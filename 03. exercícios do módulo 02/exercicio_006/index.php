<?php
    $firstName = ['João','Maria','José'];
    $lastName = ['Silva','Teixeira','Oliveira'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06</title>
</head>
<body>
    <h1>Lista de nomes:</h1>
    <ul>
        <?php for($i = 0; $i < count($firstName); $i++):?>
            <li><?= "$firstName[$i] $lastName[$i]" ?></li>
        <?php endfor;?>
    </ul>
</body>
</html>