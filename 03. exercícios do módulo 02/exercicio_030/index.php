<?php
// LÓGICA PHP (complete)
// 1. Crie um array $cursos com opções: PHP, JS, CSS
$cursos = ['PHP', 'JS', 'CSS'];

// 2. Capture os cursos selecionados ($_POST['cursos'] é um array)
$cursosSelecionados = $_POST['cursos'] ?? ''; 

?>

<!-- HTML (NÃO ALTERE) -->
<!DOCTYPE html>
<html>
<head>
    <title>Seleção de Cursos</title>
</head>
<body>
    <form method="POST">
        <h3>Selecione seus cursos:</h3>
        <select name="cursos[]" multiple>
            <?php foreach ($cursos as $curso): ?>
                <option value="<?= htmlspecialchars($curso) ?>">
                    <?= htmlspecialchars($curso) ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Enviar</button>
    </form>
    <?php if (!empty($cursosSelecionados)): ?>
        <h4>Cursos selecionados:</h4>
        <ul>
            <?php foreach ($cursosSelecionados as $curso): ?>
                <li><?= htmlspecialchars($curso) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>