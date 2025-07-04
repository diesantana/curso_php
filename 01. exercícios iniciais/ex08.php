<!--
Crie um script PHP com uma variável `$tentativas` iniciando em 1. 
Use `do...while` para simular até 3 tentativas de login, exibindo mensagens como:
<p>Tentativa 1</p>
<p>Tentativa 2</p>
<p>Tentativa 3</p>
-->
<?php
    $tentativas = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08: do...while</title>
</head>
<body>
    <?php do { ?>
        <p>Tentativa <?= $tentativas?></p>
        <?php $tentativas++?>
    <?php } while($tentativas <= 3);?>
</body>
</html>