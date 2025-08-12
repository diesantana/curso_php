<?php
/*
EXERCÍCIO: FORMULÁRIO DE CONTATO SEGURO

OBJETIVO:
Implementar a lógica PHP para:
1. Detectar envio do formulário (POST)
2. Validar campos obrigatórios (nome, e-mail, mensagem)
3. Prevenir vulnerabilidades XSS com htmlspecialchars()
4. Exibir feedback visual (sucesso/erro)

CONCEITOS ENVOLVIDOS:
- Superglobal $_POST
- Validação de formulários
- Segurança básica (XSS)
- Experiência do usuário (UX)

INSTRUÇÕES:
1. Complete APENAS as seções com "Seu código aqui"
2. Não altere a estrutura HTML/CSS existente
3. Use htmlspecialchars() em todas as saídas dinâmicas
*/

// LÓGICA PHP (complete as partes faltantes)
$nome;
$email;
$mensagem;
$error = false;
// 1. Verifique se o formulário foi enviado (método POST)
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 2. Capture os campos: nome, email, mensagem (do $_POST)
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $mensagem = $_POST['mensagem'] ?? '';
    
    // 3. Valide se os campos não estão vazios
    // 4. Se válido, armazene uma mensagem de sucesso em $feedback
    if(!empty($nome) && !empty($email) && !empty($mensagem)) {
        $error = false;
        $feedback = 'Dados cadastrados corretamente';
    } else {
        $error = true;
        $feedback = 'Os campos "Nome", "Email" e "Mensagem" são obrigatórios!';
    }

}

?>

<!-- HTML (NÃO ALTERE) -->
<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Contato</title>
    <style>
        body { font-family: Arial; max-width: 500px; margin: 20px auto; }
        .erro { color: red; }
        .sucesso { color: green; }
        input, textarea { width: 100%; margin-bottom: 10px; padding: 8px; }
        textarea { height: 100px; }
    </style>
</head>
<body>
    <h3>Formulário de Contato</h3>
    
    <?php if (!empty($feedback)): ?>
        <p class="<?= !$error ? 'sucesso' : 'erro' ?>">
            <?= htmlspecialchars($feedback) ?>
        </p>
    <?php endif; ?>
    
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome" 
               value="<?= htmlspecialchars($_POST['nome'] ?? '') ?>">
        <input type="email" name="email" placeholder="Email" 
               value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
        <textarea name="mensagem" placeholder="Mensagem"><?= 
            htmlspecialchars($_POST['mensagem'] ?? '') ?></textarea>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>