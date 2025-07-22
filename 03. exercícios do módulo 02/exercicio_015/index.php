<?php

echo PHP_EOL; // Quebra de linha para melhorar a visualização

// Verifica se ao executar o scrpit foi passado algum argumento
// Ex passando argumentos: php index.php run 
// Ex sem  argumentos: php index.php  
if(!empty($argv[1]) && $argv[1] == 'run') {
    echo 'Sucesso!' .PHP_EOL;
    die(); // Interrompe a execução do script 
}

echo 'Erro!' . PHP_EOL; // Se não for passado nenhum argumento, imprime 'erro!'
