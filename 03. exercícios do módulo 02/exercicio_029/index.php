<?php
// Código com más práticas de nomenclatura
// Refatore o código abaixo para seguir as convenções e boas práticas de nomenclatura de variáveis:

$name = "Carlos Eduardo";
$age = 32;
$email = "carlos@email.com";
$phoneNumber = "11987654321";
$address = "Av. Principal, 500";
$salary = 4500.75;
$department = "TI";
$active = true;
$registrationDate = "2023-04-15";
$userComment = "Funcionário do mês";

// Função que calcula o salário com bônus
function calcSalary($salary, $bonus) {
    return $salary + ($salary * $bonus);
}

// Exibir informações do funcionário
echo "Funcionário: $name<br>";
echo "Salário: R$ " . $salary . "<br>";
echo "Salário com bônus: R$ " . round(calcSalary($salary, 0.15), 2) . "<br>";

?>