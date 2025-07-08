<?php 
    $fruits = ['Maçã','Laranja','Banana','Pêra','Mamão','Melancia','Melão','Abacaxi','Limão','Carambola'];
    $wasOrdered = sort($fruits); // Ordena o array 
    $totalFruits = count($fruits);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
</head>
<body>
    <h1>Frutas ordenadas</h1>
    <?php if($wasOrdered):?>
        <ul>
            <?php for($i = 0; $i <$totalFruits; $i++): ?>
                <li><?= $fruits[$i]?></li>
            <?php endfor;?>
        </ul>
    <?php else:?>
        <p>Erro: Não foi possível exibir o conteúdo em ordem.</p>
    <?php endif;?>
</body>
</html>