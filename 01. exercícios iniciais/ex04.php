<!-- 
Crie um script PHP que use um laço `while` para exibir uma lista numerada de 5 produtos dentro de uma tag <ul>.

Cada item deve ser exibido como:
    <li>Produto X</li>
Substituindo `X` pelo número do produto (de 1 a 5). 
-->
<?php 
    $i = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04: While</title>
</head>
<body>
    <h2>Lista de Produtos</h2>
    <ul>
        <?php while ($i <= 5 ): ?>
            <li>Produto <?= $i?></li>
            <?php $i++ ?>
        <?php endwhile; ?>
    </ul>
</body>
</html>