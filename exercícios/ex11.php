<!--
Crie um script com um array associativo $produtos, 
onde cada chave é o nome do produto e o valor é o preço.
Produtos:
- Produto 1: Camiseta; Preço: 59.9
- Produto 2: Calça; Preço: 89.5
- Produto 3: Tênis; Preço: 199.99

Use foreach para exibir a seguinte estrutura dentro de uma tabela HTML:

| Produto  |   Preço   |
| -------- | --------  |
| Camiseta | R$ 59,90  |

-->
<?php
    $produtos = [
        'Camiseta' => 59.90,
        'Calça' => 89.50,
        'Tênis' => 199.99,
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 011: foreach</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }
        th, td{
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
    <h1>Produtos</h1>

    <table>
        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($produtos as $product => $price):?>
                <tr>
                    <td><?= $product?></td>
                    <td>R$ <?=number_format($price, 2, ',', '.')?></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>

</body>
</html>