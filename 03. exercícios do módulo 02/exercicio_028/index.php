<?php
// 1. Declare uma variável no escopo global
$nome = 'Bob Blue';


// 2. Crie uma função que tenta acessar a variável global diretamente
function tentarAcessarGlobal() {
    // Tente exibir a variável global sem usar 'global' ou '$GLOBALS'
    echo $nome;   
}

// 3. Crie uma função que declara uma variável local com o mesmo nome
function criarVariavelLocal() {
    // Declare uma variável local com o mesmo nome da global
    $nome = 'Alex Green';
    // Exiba a variável local
    echo $nome;
}

// 4. Exiba a variável global
echo "<h3>Demonstração de Escopos:</h3>";
echo "Exibindo a variável global: ";
echo $nome;
echo '<br><br>';

// 5. Chame a função que tenta acessar a variável global
echo "Chame a função que tenta acessar a variável global: " . "<br>";
tentarAcessarGlobal();
echo '<br><br>';


// 6. Chame a função que cria uma variável local
echo "Chame a função que cria uma variável local: " . "<br>";
criarVariavelLocal();
echo '<br><br>';


// 7. Verifique se a variável global foi alterada
echo "Verifique se a variável global foi alterada:" . "<br>";
echo $nome;

?>