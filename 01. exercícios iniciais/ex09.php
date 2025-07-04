<!--
Crie um script PHP que use um for para exibir 3 blocos de destaque 
com a frase "Destaque X" dentro de uma <div>.

Resultado esperado:
<div class="box">Destaque 1</div>
<div class="box">Destaque 2</div>
<div class="box">Destaque 3</div>
-->
<?php
    $destaques = 3;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09: for</title>
    <style>
        .box{
            width: 200px;
            height: 100px;
            border-radius: 10px;
            background-color: #f0f0f0;
            padding: 10px;
            margin: 15px;
        }
    </style>
</head>
<body>
    <?php for($i = 1; $i <= 3; $i++): ?>
        <div class="box">Destaque <?= $i ?></div>
    <?php endfor; ?>
</body>
</html>