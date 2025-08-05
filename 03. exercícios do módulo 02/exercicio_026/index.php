<?php
// 1. Declare uma variável chamada "nome" e atribua seu nome completo a ela
$name = 'Diego Santana';

// 2. Declare uma variável chamada "idade" e atribua sua idade a ela
$age = 28;

// 3. Declare uma variável chamada "altura" e atribua sua altura em metros (com decimais)
$height = 1.82;

// 4. Declare uma variável chamada "estudante" e atribua um valor booleano que indique se você é estudante
$student = true;

// 5. Exiba todas as variáveis e seus tipos
echo "<h3>Informações Pessoais:</h3>";
echo "<p>Nome: $name</p>";
echo "<p>Idade: $age anos</p>";
echo "<p>Altura: $height metros</p>";
echo "<p>É estudante? " . ($student ? "Sim" : "Não") . "</p>";

echo "<h3>Tipos de Variáveis:</h3>";
echo '<p>Tipo de $name: ' . gettype($name) . '</p>';
echo '<p>Tipo de $age: ' . gettype($age) . '</p>';
echo '<p>Tipo de $height: ' . gettype($height) . '</p>';
echo '<p>Tipo de $student: ' . gettype($student) . '</p>';

// 6. Use var_dump para mostrar informações detalhadas de cada variável
echo "<h3>Detalhes das Variáveis (var_dump):</h3>";
echo "<pre>";
echo 'Variável $name: ';
echo var_dump($name);
echo 'Variável $age: ';
echo var_dump($age);
echo 'Variável $height: ';
echo var_dump($height);
echo 'Variável $student: ';
echo var_dump($student);
echo "</pre>";
?>