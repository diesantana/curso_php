<?php
    // lógica de tratamento do formulário

    // Inicia a sessão para poder armazenar dados temporários entre requisições
    session_start();

    // Cria um array para armazenar mensagens de erro e valores dos campos
    $inputs = [];

    // 1. Se o script for acessado diretamente, deve apresentar um erro.
    if($_SERVER['REQUEST_METHOD'] !== 'POST') {
        die('Requisição inválida');
    }

    // Obtém os valores enviados pelo formulário
    $value1 = $_POST['text_valor_1'] ?? '';
    $value2 = $_POST['text_valor_2'] ?? '';

    // 2. Os inputs devem ser validados. Se algum dos valores não for um
    // valor numérico positivo, volta para o formulário e apresenta esse erro.

    // verifica o valor 1
    if(!is_numeric($value1)) {
        // Se o valor não for numérico e positivo adicionamos mensagem de erro 
        $inputs['text_valor_1'] = [
            'value' => $value1,
            'error' => 'O valor deve ser um número positivo.'
        ];
    } else {
        // Se for numérico e positivo salvamos o valor e deixamos o erro em branco
        $inputs['text_valor_1'] = [
            'value' => $value1,
            'error' => ''
        ];
    }

    // verifica o valor 2
    if(!is_numeric($value2)) {
        // Se o valor não for numérico e positivo adicionamos mensagem de erro 
        $inputs['text_valor_2'] = [
            'value' => $value2,
            'error' => 'O valor deve ser um número positivo.'
        ];
    } else {
        // Se for numérico e positivo salvamos o valor e deixamos o erro em branco
        $inputs['text_valor_2'] = [
            'value' => $value2,
            'error' => ''
        ];
    }

    // VERIFICA SE HOUVE ALGUM ERRO
    $errors = false;
    foreach($inputs as $input) {
        if(!empty($input['error'])) {
            $errors = true;
            break;
        }
    }

    // SE HOUVER ERROS, REDIRECIONA DE VOLTA
    if($errors) {
        // Salva os dados na sessão para reapresentar no formulário
        $_SESSION['inputs'] = $inputs;
        // Redireciona de volta para o formulário
        header('Location: index.php');
        exit();
    }

    // 3. Sendo os dois inputs valores numéricos, apresentar como resultado
    // a multiplicação do primeiro pelo segundo e dar o exercício por terminado.
    $result = $value1 * $value2;
    echo "<p>Resultado: $result</p>";