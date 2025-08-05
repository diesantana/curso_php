<?php
// 1. Declare uma variável chamada "nome" e atribua seu nome completo a ela
// Seu código aqui

// 2. Declare uma variável chamada "idade" e atribua sua idade a ela
// Seu código aqui

// 3. Declare uma variável chamada "altura" e atribua sua altura em metros (com decimais)
// Seu código aqui

// 4. Declare uma variável chamada "estudante" e atribua um valor booleano que indique se você é estudante
// Seu código aqui

// 5. Exiba todas as variáveis e seus tipos
echo "<h3>Informações Pessoais:</h3>";
echo "<p>Nome: $nome</p>";
echo "<p>Idade: $idade anos</p>";
echo "<p>Altura: $altura metros</p>";
echo "<p>É estudante? " . ($estudante ? "Sim" : "Não") . "</p>";

echo "<h3>Tipos de Variáveis:</h3>";
echo "<p>Tipo de \$nome: " . gettype($nome) . "</p>";
echo "<p>Tipo de \$idade: " . gettype($idade) . "</p>";
echo "<p>Tipo de \$altura: " . gettype($altura) . "</p>";
echo "<p>Tipo de \$estudante: " . gettype($estudante) . "</p>";

// 6. Use var_dump para mostrar informações detalhadas de cada variável
echo "<h3>Detalhes das Variáveis (var_dump):</h3>";
echo "<pre>";
// Seu código aqui
echo "</pre>";
?>