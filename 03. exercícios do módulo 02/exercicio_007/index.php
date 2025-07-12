<?php

    $names = [ 'João Oliveira','Maria Teixeira','José Silva','Ana Santos','Pedro Rodrigues','Paulo Castro','Lucas Dinis','Luiz Matias','Luiza Oliveira','Paula Cardoso','Paulina Fernandes'];

    // Filtra nomes que têm 12 ou menos caracteres (ignorando espaços)
    $filteredNames = array_filter($names, function($name) {
        return strlen($name) <= 12;
    });
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
</head>
<body>
    <h1>Nomes com até 12 caracteres</h1>
    <ul>
    <?php foreach($filteredNames as $name):?>
        <li><?= $name?></li>
    <?php endforeach;?>
    </ul>
</body>
</html>
