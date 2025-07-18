<?php 
    // Define a codificação interna do PHP para UTF-8
    mb_internal_encoding("UTF-8");
    $professions = ['Programador','Designer','Engenheiro','Médico',
    'Advogado','Professor','Bombeiro','Policial','Piloto','Cientista'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Profissão</th>
                <th>Em maiúsculas </th>
                <th>Em minúsculas</th>
                <th>Primeiras 4 letras</th>
                <th>Total caracteres</th>
            </tr>   
        </thead>
        <tbody>
            <!-- Dados vão ser inseridos aqui... -->
            <?php foreach($professions as $profession):?>
                <tr>
                    <td>
                        <!-- Profissão -->
                        <?= $profession?>
                    </td>
                    <td>
                        <!-- maiúsculas -->
                        <?= mb_strtoupper($profession)?>
                    </td>
                    <td>
                        <!-- minúsculas -->
                        <?= strtolower($profession)?>
                    </td>
                    <td>
                        <!-- Primeiras 4 letras -->
                        <?=mb_substr($profession, 0, 4)?>
                    </td>
                    <td>
                        <!-- Total caracteres -->
                        <?= strlen($profession)?>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>