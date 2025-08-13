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
function formatarNome($nome) {
    // Seu código aqui (3-5 linhas)
}

/**
 * EXERCÍCIO 2: CONTADOR DE VOGAIS
 * Contar quantas vogais tem numa string
 * (considerar maiúsculas e minúsculas)
 */
function contarVogais($texto) {
    // Seu código aqui (3-5 linhas)
}

/**
 * EXERCÍCIO 3: GERADOR DE INICIAIS
 * Dado "Fernanda Costa Pereira" retornar "F.C.P."
 */
function gerarIniciais($nomeCompleto) {
    // Seu código aqui (3-5 linhas)
}

// ======================================
// ÁREA DE TESTES RÁPIDOS (NÃO MODIFICAR)
// ======================================
echo "<h3>Teste 1 - Formatação de Nome</h3>";
echo formatarNome("maria aparecida souza") === "Maria Aparecida Souza" 
    ? "✔ Correto" : "✘ Errado";

echo "<h3>Teste 2 - Contador de Vogais</h3>";
echo contarVogais("Abacaxi") === 4 
    ? "✔ Correto" : "✘ Errado";

echo "<h3>Teste 3 - Gerador de Iniciais</h3>";
echo gerarIniciais("Carlos Eduardo Martins") === "C.E.M." 
    ? "✔ Correto" : "✘ Errado";