<?php
/**
 * EXERCÍCIO PRÁTICO: COMPARAÇÃO E ANÁLISE DE STRINGS
 * 
 * OBJETIVO: Aprender a comparar e analisar strings
 * usando funções nativas do PHP de forma eficiente.
 * 
 * INSTRUÇÕES:
 * Complete as 3 funções abaixo substituindo o código manual
 * pelas funções nativas do PHP correspondentes.
 */

// 1. COMPARAÇÃO CASE-INSENSITIVE
function saoIguaisIgnorandoCase($string1, $string2) {
    // Substitua esta implementação manual:
    $str1Lower = strtolower($string1);
    $str2Lower = strtolower($string2);
    return $str1Lower === $str2Lower;
    
    // Use uma única função nativa do PHP para comparação case-insensitive
    // Dica: procure por funções de comparação que ignoram case
}

// 2. VERIFICAÇÃO DE PREFIXO E SUFIXO
function verificarExtremos($string, $prefixo, $sufixo) {
    // Substitua esta implementação manual:
    $comecaCom = substr($string, 0, strlen($prefixo)) === $prefixo;
    $terminaCom = substr($string, -strlen($sufixo)) === $sufixo;
    return ['comeca' => $comecaCom, 'termina' => $terminaCom];
    
    // Use funções nativas do PHP para verificar início e fim
    // Dica: PHP 8+ tem funções específicas para isso
}

// 3. CONTAGEM DE PALAVRAS
function analisarTexto($texto) {
    // Substitua esta implementação manual:
    $palavras = explode(' ', trim($texto));
    $contador = 0;
    foreach ($palavras as $palavra) {
        if (!empty(trim($palavra))) {
            $contador++;
        }
    }
    return $contador;
    
    // Use uma função nativa do PHP para contar palavras
    // Dica: existe uma função específica para contar palavras em strings
}

// ÁREA DE TESTES - VERIFIQUE SEUS RESULTADOS
echo "<h2>Testes de Strings</h2>";

echo "<h3>1. Comparação Case-Insensitive:</h3>";
echo "Hello vs hello: " . (saoIguaisIgnorandoCase('Hello', 'hello') ? 'IGUAIS' : 'DIFERENTES') . "<br>";
echo "PHP vs Java: " . (saoIguaisIgnorandoCase('PHP', 'Java') ? 'IGUAIS' : 'DIFERENTES') . "<br>";

echo "<h3>2. Verificação de Extremos:</h3>";
$resultado1 = verificarExtremos('arquivo.txt', 'arq', '.txt');
echo "arquivo.txt começa com 'arq': " . ($resultado1['comeca'] ? 'SIM' : 'NÃO') . "<br>";
echo "arquivo.txt termina com '.txt': " . ($resultado1['termina'] ? 'SIM' : 'NÃO') . "<br>";

echo "<h3>3. Contagem de Palavras:</h3>";
echo "'Hello World': " . analisarTexto('Hello World') . " palavras<br>";
echo "'PHP é incrível': " . analisarTexto('PHP é incrível') . " palavras<br>";
?>