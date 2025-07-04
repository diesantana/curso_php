<!--
Crie um script que use for para exibir os números de 1 a 10, 
mas interrompa a contagem ao chegar no 6.

Cada número deve aparecer dentro de uma tag <span>, com um espaço entre eles.
<span>1</span> <span>2</span> <span>3</span>...


-->
<?php
    $interrompa = 6;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 010: break e continue</title>
    <style>
        span {
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <?php for($i = 1; $i <= 10; $i++):?>
        <?php if($i == 6) break;?>
        <span><?= $i?></span>
    <?php endfor; ?>
</body>
</html>