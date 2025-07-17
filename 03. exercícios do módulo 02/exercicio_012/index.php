<?php

    $person = [
        'nome' => 'João',
        'idade' => 20,
        'altura' => 1.80,
        'peso' => 80,
        'profissão' => 'Programador'
    ];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12</title>
</head>
<body>
    <h2>Dados</h2>
    <?php foreach($person as $key => $value):?>
        <p><?= ucfirst($key) . ' = ' . $value ?></p>
    <?php endforeach;?>
</body>
</html>