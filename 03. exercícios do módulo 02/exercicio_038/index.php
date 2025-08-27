<?php
/**
 * EXERCÍCIO PRÁTICO: OPERADOR NULL COALESCING (??)
 * 
 * OBJETIVO: Aprender a usar o operador null coalescing para simplificar
 * a verificação de valores nulos e atribuição de valores padrão.
 * 
 * INSTRUÇÕES:
 * Complete as funções abaixo substituindo as verificações manuais
 * pelo operador null coalescing (??) quando apropriado.
 */

// 1. VALOR PADRÃO PARA VARIÁVEIS
function obterNomeUsuario($dadosUsuario) {
    // Complete esta função para:
    // - Retornar o nome do usuário se existir
    // - Retornar "Visitante" se o nome for null ou não existir
    // - Use o operador null coalescing
    
    // VERIFICAÇÃO MANUAL (substitua pelo operador ??):
    // if (isset($dadosUsuario['nome']) && $dadosUsuario['nome'] !== null) {
    //     return $dadosUsuario['nome'];
    // } else {
    //     return "Visitante";
    // }

    return $dadosUsuario['nome'] ?? 'Visitante';
}

// 2. CONFIGURAÇÕES COM VALORES PADRÃO
function obterConfiguracao($configuracoes, $chave) {
    // Complete esta função para:
    // - Retornar o valor da configuração se existir
    // - Retornar null se a chave não existir
    // - Use o operador null coalescing de forma encadeada
    
    // VERIFICAÇÃO MANUAL (substitua pelo operador ??):
    // if (isset($configuracoes[$chave])) {
    //     return $configuracoes[$chave];
    // } else {
    //     return null;
    // }
    return $configuracoes[$chave] ?? null;
}

// 3. DADOS DE FORMULÁRIO COM FALLBACK
function processarFormulario($dadosForm) {
    // Complete esta função para:
    // - Obter email com padrão "Não informado"
    // - Obter idade com padrão 0
    // - Obter telefone com padrão null
    // - Use o operador null coalescing para cada campo
    
    $resultado = [
        'email' => null,
        'idade' => null,
        'telefone' => null
    ];
    
    // VERIFICAÇÕES MANUAIS (substitua pelo operador ??):
    // if (isset($dadosForm['email']) && $dadosForm['email'] !== null) {
    //     $resultado['email'] = $dadosForm['email'];
    // } else {
    //     $resultado['email'] = "Não informado";
    // }
    $resultado['email'] = $dadosForm['email'] ?? 'Não informado';
    
    // if (isset($dadosForm['idade']) && $dadosForm['idade'] !== null) {
    //     $resultado['idade'] = $dadosForm['idade'];
    // } else {
    //     $resultado['idade'] = 0;
    // }
    $resultado['idade'] = $dadosForm['idade'] ?? 0;
    
    // if (isset($dadosForm['telefone']) && $dadosForm['telefone'] !== null) {
    //     $resultado['telefone'] = $dadosForm['telefone'];
    // } else {
    //     $resultado['telefone'] = null;
    // }
    $resultado['telefone'] = $dadosForm['telefone'] ?? null;
    
    return $resultado;
}


// ÁREA DE TESTES - VERIFIQUE SEUS RESULTADOS
echo "<h2>Testes do Operador Null Coalescing</h2>";

echo "<h3>1. Nome do Usuário:</h3>";
$usuario1 = ['nome' => 'João'];
$usuario2 = ['nome' => null];
$usuario3 = [];

echo "Usuário 1: " . obterNomeUsuario($usuario1) . "<br>";
echo "Usuário 2: " . obterNomeUsuario($usuario2) . "<br>";
echo "Usuário 3: " . obterNomeUsuario($usuario3) . "<br>";

echo "<h3>2. Configurações:</h3>";
$config = ['tema' => 'escuro', 'idioma' => 'pt-br'];
echo "Tema: " . (obterConfiguracao($config, 'tema') ?? 'padrão') . "<br>";
echo "Limite: " . (obterConfiguracao($config, 'limite') ?? 'não definido') . "<br>";

echo "<h3>3. Formulário:</h3>";
$form1 = ['email' => 'teste@email.com', 'idade' => 25];
$form2 = ['email' => null, 'telefone' => '9999-9999'];
$form3 = [];

print_r(processarFormulario($form1));
echo "<br>";
print_r(processarFormulario($form2));
echo "<br>";
print_r(processarFormulario($form3));
echo "<br>";

?>