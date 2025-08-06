<?php
// 1. Declare três variáveis globais: nome, idade e profissão
$nome = 'Bob Green';
$idade = 34;
$profissao = 'Desenvolvedor';


// // 2. Crie uma função que tenta acessar estas variáveis sem usar 'global' ou $GLOBALS
// // Qual será o resultado? Variável indefinida
// function exibirInformacoesSemGlobal() {
//     // Seu código aqui
//     echo "Olá $nome";
// }

// // 3. Crie uma função que acessa as variáveis globais usando a palavra-chave 'global'
// function exibirInformacoesComGlobal() {
//     global $nome;
//     global $idade;
//     global $profissao;
// }

// // 4. Crie uma função que acessa as variáveis globais usando o array $GLOBALS
// function exibirInformacoesComGLOBALS() {
//     $nome = $GLOBALS['nome'];
//     echo "Olá $nome";
// }

// // 5. Crie uma função que define variáveis locais com os mesmos nomes das globais
// // O que acontece com as variáveis globais? 
// function exibirInformacoesLocais() {
//     // Seu código aqui (defina variáveis locais)
//     $nome = 'Alex Blue';
//     $idade = 40;
//     $profissao = 'Mecanico';
//     echo 'Vairável local ($nome) dentro da função exibirInformacoesLocais(): ' . $nome;
// }

// echo 'Vairável global ($nome) após utilizar a função exibirInformacoesLocais(): ' . $nome;

// // Chamada das funções
// echo "<h2>Demonstração de Escopo Global e Local</h2>";

// echo "<h3>1. Tentativa sem declaração global</h3>";
// exibirInformacoesSemGlobal();

// echo "<h3>2. Usando a palavra-chave 'global'</h3>";
// exibirInformacoesComGlobal();

// echo "<h3>3. Usando o array \$GLOBALS</h3>";
// exibirInformacoesComGLOBALS();

// echo "<h3>4. Usando variáveis locais</h3>";
// exibirInformacoesLocais();

// 6. Altere uma variável global dentro de uma função e exiba seu valor antes e depois
echo "<h3>5. Alterando variável global dentro de função</h3>";
echo "<p>Idade antes da função: $idade</p>";

function alterarIdade() {
    // Seu código aqui para alterar a variável global $idade para 30
    $GLOBALS['idade'] = 22;
}

alterarIdade();
echo "<p>Idade após a função: $idade</p>";

?>