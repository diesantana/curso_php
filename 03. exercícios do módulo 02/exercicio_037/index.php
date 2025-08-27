<?php
/**
 * EXERCÍCIO PRÁTICO: LAÇO WHILE
 * 
 * OBJETIVO: Aprender a usar estruturas de repetição while
 * para resolver problemas comuns de programação.
 * 
 * INSTRUÇÕES:
 * Complete as funções abaixo usando laços WHILE.
 * Preste atenção nas condições de parada para evitar loops infinitos.
 */

// 1. CONTAGEM REGRESSIVA
function contagemRegressiva($numeroInicial) {
    // Complete esta função para:
    // - Fazer uma contagem regressiva a partir do número inicial
    // - Exibir cada número da contagem
    // - Parar quando chegar a 0
    // - Retornar a string "Fogo!"
    
    echo "Contagem regressiva começando em $numeroInicial:<br>";
    
    // SUA IMPLEMENTAÇÃO AQUI:
    // Use while para fazer a contagem regressiva
    while($numeroInicial > 0) {
        echo $numeroInicial . '<br>';
        $numeroInicial--;
    }
    
    return "Fogo!";
}

// ÁREA DE TESTES - VERIFIQUE SEUS RESULTADOS
echo "<h2>Testes do Laço WHILE</h2>";

echo "<h3>1. Contagem Regressiva:</h3>";
echo contagemRegressiva(5);
echo '<br><br>';
echo contagemRegressiva(15);

?>