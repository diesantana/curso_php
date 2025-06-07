<?php

// iniciação dos arrays  (ignorar o zero)
$numeros_positivos = [];
$numeros_negativos = [];
$textos = [];
$textos_teste = [];

// função que trata números
// Classifica um número como positivo ou negativo e o adiciona ao array correspondente
// True se for positivo, False se for negativo
function classifyNumberBySign($number, &$positiveArray, &$negativeArray) {
    if($number > 0) {
        $positiveArray[] = $number;
        return true;
    } else {
        $negativeArray[] = $number;
        return false;
    }
}

// função que trata stings
// Verifica se a string tem a palavra teste e adiciona ao array correspondente
// Retorna true se for test, False se não. 
function isTestString($string, &$arrayStringTest, &$arrayString) {

    if(str_contains(strtoupper($string), 'TEST')) {
        $arrayStringTest[] = $string;
        return true;
    } else {
        $arrayString[] = $string;
        return false;
    }
}

// Abrir o arquivo para leitura
$file = fopen('dados.dat', 'r');

// Enquanto não for o final do arquivo lê linha a linha 
while(!feof($file)) {
    $line = fgets($file); 
    if($line === 0) continue; // ignora o número 0

    // verifica o tipo de dado
    if(is_numeric($line)) {
        // chamo a função que trata números.
        classifyNumberBySign($line, $numeros_positivos, $numeros_negativos);
    } else {
        // chamo a função que trata strings.
        isTestString($line, $textos_teste, $textos);
    }
}

// fecha o arquivo
fclose($file);

// apresentação dos arrays
echo '<pre>';
echo "<h2>Números positivos</h2>";
print_r($numeros_positivos);
echo '<hr>';
echo "<h2>Números negativos</h2>";
print_r($numeros_negativos);
echo '<hr>';
echo "<h2>Textos</h2>";
print_r($textos);
echo '<hr>';
echo "<h2>Textos TEST</h2>";
print_r($textos_teste);