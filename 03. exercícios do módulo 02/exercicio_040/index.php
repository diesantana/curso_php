<?php
/**
 * EXERCÍCIO PRÁTICO: LAÇO FOR EM PHP
 * 
 * OBJETIVO: Praticar o uso do laço for para resolver
 * problemas comuns de iteração e processamento de dados.
 * 
 * INSTRUÇÕES:
 * Complete as 2 funções abaixo usando laços FOR.
 */

// 1. GERAR TABUADA COMPLETA
function gerarTabuada($numero) {
    // Complete esta função para:
    // - Gerar a tabuada do número de 1 a 10
    // - Retornar um array com os resultados no formato:
    //   ["1 x 5 = 5", "2 x 5 = 10", ..., "10 x 5 = 50"]
    
    $tabuada = [];
    
    // SEU CÓDIGO AQUI (use for)
    for($i = 1; $i <= 10; $i++) {
        $currentValue = "$i X $numero = " . $i * $numero;
        array_push($tabuada, $currentValue);
    }
    
    return $tabuada;
}

// // 2. PROCESSAR ARRAY E FILTRAR VALORES
function filtrarPares($numeros) {
    // Complete esta função para:
    // - Percorrer o array de números usando for
    // - Identificar e armazenar apenas os números pares
    // - Retornar um novo array só com números pares
    
    $pares = [];
    
    // SEU CÓDIGO AQUI (use for)
    $lenghNumeros = count($numeros);

    for ($i=0; $i < $lenghNumeros; $i++) { 
        if($numeros[$i] % 2 == 0) array_push($pares, $numeros[$i]);
    }
    
    return $pares;
}

// ÁREA DE TESTES - VERIFIQUE SEUS RESULTADOS
echo "<h2>Testes do Laço FOR</h2>";

echo "<h3>1. Tabuada do 7:</h3>";
$tabuada7 = gerarTabuada(7);
echo implode('<br>', $tabuada7);

echo "<h3>2. Filtrar Pares [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]:</h3>";
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$pares = filtrarPares($numeros);
echo "Números pares: " . implode(', ', $pares);

?>