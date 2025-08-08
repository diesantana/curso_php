<?php
// Código com más práticas de nomenclatura
// Refatore o código abaixo para seguir as convenções e boas práticas de nomenclatura de variáveis:

$n = "Carlos Eduardo";
$i = 32;
$e = "carlos@email.com";
$t = "11987654321";
$end = "Av. Principal, 500";
$sal = 4500.75;
$dp = "TI";
$ATIVO = true;
$dt_cad = "2023-04-15";
$comentario_usuario = "Funcionário do mês";

// Função que calcula o salário com bônus
function calc_sal($s, $b) {
    $res = $s + ($s * $b);
    return $res;
}

// Exibir informações do funcionário
echo "Funcionário: $n<br>";
echo "Salário: R$ " . $sal . "<br>";
echo "Salário com bônus: R$ " . calc_sal($sal, 0.15) . "<br>";

// Seu código refatorado aqui:

?>