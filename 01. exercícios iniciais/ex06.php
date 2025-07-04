<!--
Crie um script PHP que use um `for` 
para exibir a tabuada do número 5 de 1 a 10 dentro de uma tabela HTML.

A estrutura da tabela deve conter duas colunas:

| Expressão | Resultado |
|  -------  |  -------  |
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06: For</title>
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
    <h2>Tabauda do 5</h2>

    <table>
        <thead>
            <tr>
                <th>Expressão</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            <tr <?php for ($i = 1; $i <= 10; $i++):?>>
                <td>5 X <?= $i ?></td>
                <td><?= (5*$i) ?></td>
            </tr <?php endfor;?>>
        </tbody>
    </table>
    
</body>
</html>