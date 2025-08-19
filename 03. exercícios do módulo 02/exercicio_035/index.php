<?php
/**
 * Exercício: Uso de Constantes e Configurações em PHP
 *
 * Objetivo: Aprender a definir e utilizar constantes em PHP para armazenar
 * valores que não devem ser alterados durante a execução do script.
 * 
 * Conceitos abordados:
 * - Definição de constantes com define() e const
 * - Diferenças entre constantes e variáveis
 * - Boas práticas na nomenclatura de constantes
 * - Uso de constantes para configurações globais
 */

// Instruções:
// 1. Converta as variáveis abaixo em constantes apropriadas
// 2. Siga as convenções de nomenclatura (UPPERCASE para constantes)
// 3. Use a sintaxe correta (define ou const)
// 4. Complete as funções para utilizar as constantes

// PARTE 1: Convertendo variáveis em constantes
// Estas variáveis devem ser convertidas em constantes, pois representam
// valores que não devem mudar durante a execução do programa.

$limiteIdade = 18;         // Idade mínima para cadastro
$taxaDesconto = 0.1;       // 10% de desconto para clientes especiais
$nomeSistema = "SistemaCadastro"; // Nome do sistema
$versaoSistema = "1.0";    // Versão atual do sistema
$moedaPadrao = "BRL";      // Código da moeda utilizada

// Seu código aqui: Converta as variáveis acima em constantes
// Exemplo: define('NOME_CONSTANTE', valor);
// ou: const NOME_CONSTANTE = valor;


// PARTE 2: Utilizando constantes em funções

/**
 * Verifica se um usuário é elegível para cadastro e compras
 * 
 * @param int $idade Idade do usuário
 * @param float $valorCompra Valor da compra
 * @return array Resultado da verificação com mensagens e valores
 */
function verificarElegibilidade($idade, $valorCompra) {
    // Inicializa o array de resultados
    $resultado = [
        'elegivel' => false,
        'mensagem' => '',
        'valorFinal' => $valorCompra,
        'desconto' => 0
    ];
    
    // 1. Verificar se a idade do usuário atende ao limite mínimo
    // Use a constante que você criou para o limite de idade
    if (/* Seu código aqui */) {
        $resultado['elegivel'] = true;
        $resultado['mensagem'] = 'Usuário elegível para cadastro.';
        
        // 2. Calcular desconto para clientes (se valor de compra > R$ 100)
        if ($valorCompra > 100) {
            // Use a constante que você criou para a taxa de desconto
            $desconto = /* Seu código aqui */;
            $resultado['desconto'] = $desconto;
            $resultado['valorFinal'] = $valorCompra - $desconto;
        }
    } else {
        $resultado['mensagem'] = 'Usuário não atingiu a idade mínima para cadastro.';
    }
    
    return $resultado;
}

/**
 * Exibe informações do sistema formatadas
 * 
 * @return string Informações do sistema
 */
function exibirInformacoesSistema() {
    // Use as constantes que você criou para nome, versão e moeda do sistema
    $info = "<div style='background-color: #f0f0f0; padding: 10px; border-radius: 5px;'>";
    $info .= "<h3>Informações do Sistema</h3>";
    $info .= "<p><strong>Nome do Sistema:</strong> " . /* Sua constante aqui */ . "</p>";
    $info .= "<p><strong>Versão:</strong> " . /* Sua constante aqui */ . "</p>";
    $info .= "<p><strong>Moeda Padrão:</strong> " . /* Sua constante aqui */ . "</p>";
    $info .= "</div>";
    
    return $info;
}

// PARTE 3: Testando as funções com diferentes valores

echo "<h2>Sistema de Validação e Cadastro</h2>";

// Teste 1: Usuário menor de idade
$resultado1 = verificarElegibilidade(16, 50);
echo "<h3>Teste 1: Usuário com 16 anos</h3>";
echo "<p>Mensagem: {$resultado1['mensagem']}</p>";
echo "<p>Elegível: " . ($resultado1['elegivel'] ? 'Sim' : 'Não') . "</p>";
echo "<p>Valor da compra: R$ 50,00</p>";
echo "<p>Desconto aplicado: R$ " . number_format($resultado1['desconto'], 2, ',', '.') . "</p>";
echo "<p>Valor final: R$ " . number_format($resultado1['valorFinal'], 2, ',', '.') . "</p>";
echo "<hr>";

// Teste 2: Usuário elegível com compra abaixo de R$ 100
$resultado2 = verificarElegibilidade(25, 80);
echo "<h3>Teste 2: Usuário com 25 anos</h3>";
echo "<p>Mensagem: {$resultado2['mensagem']}</p>";
echo "<p>Elegível: " . ($resultado2['elegivel'] ? 'Sim' : 'Não') . "</p>";
echo "<p>Valor da compra: R$ 80,00</p>";
echo "<p>Desconto aplicado: R$ " . number_format($resultado2['desconto'], 2, ',', '.') . "</p>";
echo "<p>Valor final: R$ " . number_format($resultado2['valorFinal'], 2, ',', '.') . "</p>";
echo "<hr>";

// Teste 3: Usuário elegível com compra acima de R$ 100 (deve receber desconto)
$resultado3 = verificarElegibilidade(30, 150);
echo "<h3>Teste 3: Usuário com 30 anos</h3>";
echo "<p>Mensagem: {$resultado3['mensagem']}</p>";
echo "<p>Elegível: " . ($resultado3['elegivel'] ? 'Sim' : 'Não') . "</p>";
echo "<p>Valor da compra: R$ 150,00</p>";
echo "<p>Desconto aplicado: R$ " . number_format($resultado3['desconto'], 2, ',', '.') . "</p>";
echo "<p>Valor final: R$ " . number_format($resultado3['valorFinal'], 2, ',', '.') . "</p>";
echo "<hr>";

// Exibir informações do sistema
echo exibirInformacoesSistema();

// PARTE 4 (Desafio adicional): 
// Crie uma nova constante chamada DESENVOLVEDOR com seu nome
// e modifique a função exibirInformacoesSistema() para exibir esta informação
?>
