<?php 
/* 
Crie um programa PHP que:

1. Gere um arquivo `produtos.csv` com 10 produtos.
2. Cada produto deve conter: Nome, Preço e Estoque.
3. Em seguida, leia o arquivo e exiba os dados em uma tabela HTML.

$produtos = [
    ["Nome", "Preço", "Estoque"],
    ["Camiseta", 49.90, 100],
    ["Tênis", 199.90, 50],
    ["Boné", 29.90, 75],
    // ...adicione mais 7 produtos
];
*/

    $produtos = [
        ['Nome', 'Preço', 'Estoque'],
        ['Camiseta', 49.90, 100],
        ['Tênis', 199.90, 50],
        ['Boné', 29.90, 75],
        ['Meia', 19.90, 30],
        ['Calça', 129.90, 40],
        ['Jaqueta', 159.90, 45],
        ['Óculos de sol', 189.90, 30],
        ['Travesseiro', 69.90, 20],
        ['Cobertor', 129.90, 25],
        ['Garrafa térmica', 89.90, 15]
    ];

    // cria o arquivo csv 
    $file = fopen('ex22_produtos.csv', 'w');
    foreach($produtos as $produto) {
        fputcsv($file, $produto);
    }
    fclose($file);

    // Lendo e exibindo no HTML
    $fileToRead = fopen('ex22_produtos.csv', 'r');
    echo "<table border='1'>";

    while(($line = fgetcsv($fileToRead))) {
        echo "<tr>";  // linha da tabela 
        foreach($line as $column) {
            echo "<td> $column </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    fclose($fileToRead);
?>