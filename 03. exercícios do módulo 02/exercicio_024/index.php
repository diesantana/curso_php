<?php

$name = '';
$lastname = '';
$error = '';
$message = '';

// Verificar se o formulário foi submetido corretamente.
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Captura os valores enviados pelo formulário
    // caso não existam dados, atribui uma string vazia. 
    $name = trim($_POST['text_nome']) ?? '';
    $lastname = trim($_POST['text_sobrenome']) ?? '';
    
    // Validação dos campos
    if(empty($name) || empty($lastname)) {
        $error = 'Os campos nome e sobrenome são obrigatórios';
    } else {
        $message = "Olá $name $lastname";
    }    
}

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <form action="index.php" method="post">
                    <div class="mb-3">
                        <input type="text" name="text_nome" class="form-control" placeholder="Nome">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="text_sobrenome" class="form-control" placeholder="Sobrenome">
                    </div>
                    <div class="mb-3 text-center">
                        <input type="submit" value="Enviar" class="btn btn-secondary">
                    </div>
                </form>
            </div>
            <div class="col-12 text-center">
                <?php if(!empty($error)):?>
                    <p class="text-danger"><?= $error?></p>
                <?php endif;?>
                <?php if(!empty($message)):?>
                    <p class="text-success"><?= $message?></p>
                <?php endif;?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>