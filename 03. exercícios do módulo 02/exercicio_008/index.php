<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08</title>
</head>
<body>
    <h1>Tabuada do 2 ao 6</h1>

    <?php for($i = 2; $i <= 6; $i++):?>
        
        <h3><?= "Tabuada do $i"?></h3>

        <?php for($j = 1; $j <= 10; $j++):?>
            <p><?= "$i X $j = ". $i*$j ?></p>
        <?php endfor;?>

        <hr>
    <?php endfor;?>
    
</body>
</html>