<?php 
/*Use for para exibir os números de 1 a 10 dentro de <span>. 
Porém, ignore os números pares usando continue. */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 18: Break e continue</title>
    <style>
        span {margin-right: 2px;}
    </style>
</head>
<body>
    <?php for($i = 1; $i <= 10; $i++):?>
        <?php if($i % 2 == 0) continue;?>
        <span><?=$i?></span>
    <?php endfor?>
</body>
</html>