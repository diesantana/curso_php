<?php 
/* 
Crie um script PHP que:

1. Grave os nomes de 5 produtos em um arquivo chamado produtos.txt.
    (Arroz, Feijão, Macarrão, Óleo, Sal)
2. Depois, leia esse arquivo e exiba os nomes com quebra de linha em HTML.
*/

    // Cria o arquivo ou sobrescreve se não existir
    $file = fopen('produtos.txt', 'w');
    $produtos = ['Arroz', 'Feijão', 'Macarrão', 'Óleo', 'Sal'];

    
    foreach($produtos as $produto) {
        fputs($file, $produto . PHP_EOL); // grava os produtos no arquivo
    }

    fclose($file);

    // Lendo o arquivo no HTML
    $fileToRead = fopen('produtos.txt', 'r');

    while(($linha = fgets($fileToRead))) {
        echo $linha . '<br>';
    }

    fclose($fileToRead);

?>