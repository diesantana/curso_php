<?php
/**
 * EXERCÍCIO DE STRING
 * 
 * Objetivo: Praticar manipulação básica de strings
 * com problemas focados e de rápida solução.
 */

/**
 * EXERCÍCIO: GERADOR DE INICIAIS
 * Dado "Fernanda Costa Pereira" retornar "F.C.P."
 */
function gerarIniciais($nomeCompleto) {
    // Divide a string em um array onde cada item do array é uma parte do nome
    $dividedName = explode(' ', strtoupper($nomeCompleto));
    $initials = '';

    // Itera sobre o array com partes do nome, para pegar a primeira letra
    // Monta as iniciais com a primeira letra de cada item do array
    foreach($dividedName as $partName) {
        $initials .= $partName[0] . '.';
    }

    return $initials;
}

// ======================================
// ÁREA DE TESTES RÁPIDOS (NÃO MODIFICAR)
// ======================================
echo "<h3>Teste - Gerador de Iniciais</h3>";
echo gerarIniciais("Carlos Eduardo Martins") === "C.E.M." 
? "✔ Correto" : "✘ Errado";

// echo "<br>" . gerarIniciais("Fernanda Costa Pereira");