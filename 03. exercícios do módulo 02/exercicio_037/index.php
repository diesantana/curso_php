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
    
    return "Fogo!";
}

// 2. CALCULAR POTÊNCIA
function calcularPotencia($base, $expoente) {
    // Complete esta função para:
    // - Calcular a potência usando multiplicações sucessivas
    // - Usar um laço while para fazer as multiplicações
    // - Retornar o resultado
    
    // SUA IMPLEMENTAÇÃO AQUI:
    // Use while para calcular base^expoente
    
    return $resultado;
}



// ÁREA DE TESTES - VERIFIQUE SEUS RESULTADOS
echo "<h2>Testes do Laço WHILE</h2>";

echo "<h3>1. Contagem Regressiva:</h3>";
echo contagemRegressiva(5);

echo "<h3>2. Cálculo de Potência:</h3>";
echo "2^5 = " . calcularPotencia(2, 5) . "<br>";
echo "3^4 = " . calcularPotencia(3, 4) . "<br>";

?>