<?php
/**
 * EXERCÍCIO DE STRING
 * 
 * Objetivo: Praticar manipulação básica de strings
 * com problemas focados e de rápida solução.
 */

/**
 * EXERCÍCIO 1: FORMATAÇÃO DE NOME
 * Converter "joão da silva" para "João da Silva"
 */
function formatarNome($name) {
    // Convertendo todas as letras para maiúsculas
    $formattedName = ucwords(strtolower($name));
    // Lista de preposições que devem ficar em minúsculas
    $prepositions = [' Da ', ' De ', ' Do ', ' Dos ', ' Das ', ' E '];
    $prepositionsLower = [' da ', ' de ', ' do ', ' dos ', ' das ', ' e '];

    // Substitui as preposições de $name por minúsculas, se houver
    return str_replace($prepositions, $prepositionsLower, $formattedName);
    // return $formattedName;
}


// ======================================
// ÁREA DE TESTES RÁPIDOS (NÃO MODIFICAR)
// ======================================
echo "<h3>Teste 1 - Formatação de Nome</h3>";
echo formatarNome("maria aparecida de souza") === "Maria Aparecida de Souza" 
? "✔ Correto" : "✘ Errado";

// echo '<br>' . formatarNome("maria aparecida de souza"); 
// echo '<br>' . formatarNome("joão da silva"); 