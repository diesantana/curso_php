<?php

    /* 
    Constrói uma apresentação em HTML que mostra a tabuáda dos 5.
    Exemplo:
    5 x 1 = 5
    5 x 2 = 10
    5 x 3 = 15
    ...
    5 x 10 = 50
    */
    $number = 5;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Expressão</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i = 1; $i <= 10; $i++):?>
                <tr>
                    <td><?= $number .' X '. $i?></td>
                    <td><?= $number * $i?></td>
                </tr>
            <?php endfor;?>
        </tbody>
    </table>
</body>
</html>