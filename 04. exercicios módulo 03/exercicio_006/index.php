<?php
declare(strict_types=1);

// Função de autoload
function carregarClasses($nomeClasse) {
    $caminho = __DIR__ . "/Classes/" . $nomeClasse . ".php";

    if (file_exists($caminho)) {
        require_once $caminho;
    }
}

// Registra a função de autoload
spl_autoload_register("carregarClasses");

$livro1 = new Livro('1984', 'George Orwell', 328);
$livro2 = new Livro('O Senhor dos Anéis', 'J.R.R. Tolkien', 1178);
$livro3 = new Livro('Dom Casmurro', 'Machado de Assis', 256);
$livro4 = new Livro('Livro Teste', 'J.R.R. Tolkien', 500);

// Adicionando livros a biblioteca
$biblioteca = new Biblioteca();
$biblioteca->adicionarLivro($livro1);
$biblioteca->adicionarLivro($livro2);
$biblioteca->adicionarLivro($livro3);
$biblioteca->adicionarLivro($livro4);

// Listando os livros 
$livros = $biblioteca->listarLivros();
foreach($livros as $livro) {
    echo $livro->details();
    echo '<br>';
}

// Livros por Autor
echo '<hr>';
echo 'Livros por Autor' . '<br>';
$livrosPorAutor = $biblioteca->buscarPorAutor('J.R.R. Tolkien');
foreach($livrosPorAutor as $livro) {
    echo $livro->details();
    echo '<br>';
}

// Total Páginas
echo '<hr>';
$totalPages = $biblioteca->contarPaginasTotais();
echo "Total Páginas: $totalPages";