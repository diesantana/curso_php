<?php
    /**
    * Valida um campo numérico retornando o resultado da validação
    */
    function validateNumericField($value, $fieldName) {
        global $inputs;

        if(!is_numeric($value) || $value <= 0) {
            $inputs[$fieldName] = [
                'value' => $value,
                'error' => 'O valor deve ser um número positivo.'
            ];
            return false;
        } else {
            $inputs[$fieldName] = [
                'value' => $value,
                'error' => ''
            ];
            return true;
        }
    }

    // Inicia a sessão para poder armazenar dados temporários entre requisições
    session_start();

    // Cria um array para armazenar mensagens de erro e valores dos campos
    $inputs = [];

    // Se o script for acessado diretamente, deve apresentar um erro.
    if($_SERVER['REQUEST_METHOD'] !== 'POST') {
        die('Requisição inválida');
    }

    // Obtém os valores enviados pelo formulário
    $value1 = $_POST['text_valor_1'] ?? '';
    $value2 = $_POST['text_valor_2'] ?? '';

    // verifica se os números são válidos
    $isValidValue1 = validateNumericField($value1, 'text_valor_1');
    $isValidValue2 = validateNumericField($value2, 'text_valor_2');

    // SE HOUVER ERROS, REDIRECIONA DE VOLTA
    if(!$isValidValue1 || !$isValidValue2) {
        // Salva os dados na sessão para reapresentar no formulário
        $_SESSION['inputs'] = $inputs;
        // Redireciona de volta para o formulário
        header('Location: index.php');
        exit();
    }

    // SE NÃO HOUVER ERROS, MOSTRA O VALOR. 
    $result = $value1 * $value2;
    echo "<p>Resultado: $result</p>";