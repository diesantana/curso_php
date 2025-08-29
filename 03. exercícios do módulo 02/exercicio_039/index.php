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
    return strcasecmp($string1, $string2) == 0 ? true : false;     
}

// 2. VERIFICAÇÃO DE PREFIXO E SUFIXO
function verificarExtremos($string, $prefixo, $sufixo) {
    // Substitua esta implementação manual:
    $comecaCom = str_starts_with($string, $prefixo);
    $terminaCom =  str_ends_with($string, $sufixo);
    return ['comeca' => $comecaCom, 'termina' => $terminaCom];
}

// 3. CONTAGEM DE PALAVRAS
function analisarTexto($texto) {
    return str_word_count($texto);
}

// ÁREA DE TESTES - VERIFIQUE SEUS RESULTADOS
echo "<h2>Testes de Strings</h2>";

echo "<h3>1. Comparação Case-Insensitive:</h3>";
echo "Hello vs hello: " . (saoIguaisIgnorandoCase('Hello', 'hello') ? 'IGUAIS' : 'DIFERENTES') . "<br>";
echo "PHP vs Java: " . (saoIguaisIgnorandoCase('PHP', 'Java') ? 'IGUAIS' : 'DIFERENTES') . "<br>";
echo "PHP vs php: " . (saoIguaisIgnorandoCase('PHP', 'php') ? 'IGUAIS' : 'DIFERENTES') . "<br>";

echo "<h3>2. Verificação de Extremos:</h3>";
$resultado1 = verificarExtremos('arquivo.txt', 'arq', '.txt');
echo "arquivo.txt começa com 'arq': " . ($resultado1['comeca'] ? 'SIM' : 'NÃO') . "<br>";
echo "arquivo.txt termina com '.txt': " . ($resultado1['termina'] ? 'SIM' : 'NÃO') . "<br>";

echo "<h3>3. Contagem de Palavras:</h3>";
echo "'Hello World': " . analisarTexto('Hello World') . " palavras<br>";
echo "'PHP é incrível': " . analisarTexto('PHP é incrível') . " palavras<br>";
?>