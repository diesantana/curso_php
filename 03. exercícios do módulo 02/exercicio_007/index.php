<?php

    $names = [ 'João Oliveira','Maria Teixeira','José Silva','Ana Santos','Pedro Rodrigues','Paulo Castro','Lucas Dinis','Luiz Matias','Luiza Oliveira','Paula Cardoso','Paulina Fernandes'];

    $filteredNames = [];

    foreach($names as $name) {

        if(strlen($name) <= 12) {
            array_push($filteredNames, $name); // adiciona nomes <= 12 caracteres ao array 
        }
    }
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
