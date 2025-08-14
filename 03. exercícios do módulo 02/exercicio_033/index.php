<?php
/**
 * EXERCÍCIO DE STRING
 * 
 * Objetivo: Praticar manipulação básica de strings
 * com problemas focados e de rápida solução.
 */

/**
 * EXERCÍCIO: CONTADOR DE VOGAIS
 * Contar quantas vogais tem numa string
 * (considerar maiúsculas e minúsculas)
 */
function contarVogais($texto) {
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    $cont = 0;
    $textoToLower = strtolower($texto); 
    foreach($vogais as $vogal) {
        $cont += substr_count($textoToLower, $vogal);
    }

    return $cont;
}

// ======================================
// ÁREA DE TESTES RÁPIDOS (NÃO MODIFICAR)
// ======================================

echo "<h3>Teste - Contador de Vogais</h3>";
echo contarVogais("Abacaxi") === 4 
    ? "✔ Correto" : "✘ Errado";
echo "<br>";
echo contarVogais("Abacaxi");
