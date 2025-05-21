<!--
Crie um script PHP que utilize o operador ternário para exibir a seguinte mensagem:
- Se $logado = true, exiba: "Olá, usuário! Seja bem-vindo de volta."
- Caso contrário, exiba: "Olá, visitante! Faça login para continuar."

A mensagem deve aparecer dentro de uma tag <p>.
-->
<?php
    // $logado = true;
    $logado = false;
    $message = $logado ? 'Olá, usuário! Seja bem-vindo de volta.' : 'Olá, visitante! Faça login para continuar.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício: Operador ternário</title>
</head>
<body>
    <p><?= $message?></p>
</body>
</html>