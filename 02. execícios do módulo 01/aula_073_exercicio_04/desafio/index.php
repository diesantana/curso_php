<?php
    $error = '';
    $sucesso = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['input_text'])) {
            $error = 'Campo de texto vazio';
        } else {
            $valor = $_POST['input_text'];

            if (is_numeric($valor)) {
                // guardar esse valor num ficheiro dados_numericos.txt
                $file = fopen('dados_numericos.txt', 'a');
                fputs($file, $valor . PHP_EOL);
                fclose($file);
                $sucesso = 'Valor numérico guardado com sucesso.';
            } else if (is_string($valor)) {
                // guardar esse valor num ficheiro dados_string.txt
                $file = fopen('dados_string.txt', 'a');
                fputs($file, $valor . PHP_EOL);
                fclose($file);
                $sucesso = 'Valor string guardado com sucesso.';
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Nível 1 - Exercício 04</title>
</head>

<body>
    <form action="" method="post">
        <!-- campo de texto -->
        <input type="text" name="input_text" id="input_text">
        <!-- botão de submissão -->
        <input type="submit" value="Enviar">
    </form>
    <?= !empty($error) ? $error : $sucesso ?>
</body>

</html>