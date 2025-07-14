<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09</title>
</head>
<body>
    <h2>Multiplicação de números aleatórios</h2>
    <?php for($i = 1; $i <= 20; $i++):?>
        <?php $randomNumber = rand(1, 100);?>
        <p><?= "$randomNumber X 3 = " . ($randomNumber*3) ?></p>
    <?php endfor;?>

</body>
</html>