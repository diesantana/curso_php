<?php
    // Inicia a sessão para acessar valores armazenados anteriormente
    session_start();

    // Inicializa o array que conterá os dados dos campos
    $inputs = [];

    // Se houver dados salvos na sessao carregamos e limpamos
    if(isset($_SESSION['inputs'])) {
        $inputs = $_SESSION['inputs'];
        unset($_SESSION['inputs']); // Limpamos para não reutilizar em outro acesso
    }

    // Função auxiliar para exibir o valor digitado anteriormente em um campo
    function showValue(string $field): string {
        global $inputs;
        // Se existir um valor para o campo, retornamos. Senão, uma string vazia
        return $inputs[$field]['value'] ?? '';
    }

    // Função auxiliar para exibir mensagens de erro específicas do campo
    function showError(string $field): string {
        global $inputs;
        // Se houver erro para o campo, retornamos um <div> com a mensagem
        if(!empty($inputs[$field]['error'])) {
            return "<div class='error'>{$inputs[$field]['error']}</div>";
        } else {
            return ''; // Caso contrário, não mostramos nada
        }
    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Nível 1 - Exercício 01</title>
    <style>
        .wrapper {
            width: 600px;
            margin: 50px auto;
        }

        .error {
            color: red;
            margin-bottom: 5px;
        }

        input[type=text] {
            width: 100%;
            padding: 5px;
            margin: 10px 0px;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <form action="tratamento.php" method="post">
            <label>Valor 1</label>
            <input type="text" name="text_valor_1" value="<?= showValue('text_valor_1') ?>">
            <?= showError('text_valor_1') ?> <!-- Mostra erro, se houver -->
            <label>Valor 2</label>
            <input type="text" name="text_valor_2" value="<?= showValue('text_valor_2') ?>">
            <?= showError('text_valor_2') ?> <!-- Mostra erro, se houver -->
            <!-- Botão para enviar o formulário -->
            <input type="submit" value="Executar">
        </form>
    </div>

</body>

</html>