<!--
Dado um array com nomes de pessoas, use `foreach` para exibir cada nome dentro de uma tag <li>.
Todos os nomes devem ser exibidos dentro de uma lista não ordenada <ul>.

- $nomes = ["Lucas", "Marina", "Rafael", "Beatriz"];
-->
<?php
    $pessoas = ['Lucas', 'Marina', 'Rafael', 'Beatriz'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07: foreach</title>
</head>
<body>
    <h3>Lista de pessoas</h3>
    <ul>
        <?php foreach($pessoas as $pessoa): ?>
            <li><?= $pessoa ?></li>
        <?php endforeach ;?>
    </ul>
</body>
</html>