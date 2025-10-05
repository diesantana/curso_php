<?php
declare(strict_types=1);

class Biblioteca{
    private array $livros =[];

    public function adicionarLivro(Livro $livro):void {
        array_push($this->livros, $livro);
    }

    public function listarLivros():array {
        return $this->livros;
    }

    public function buscarPorAutor(string $autor):array {
        $livrosPorAutor = [];
        foreach($this->livros as $livro) {
            if($livro->getAuthor() == $autor) {
                array_push($livrosPorAutor, $livro);
            }
        }
        return $livrosPorAutor;
    }

    public function contarPaginasTotais():int {
        $total = 0;
        foreach($this->livros as $livro) {
            $total += $livro->getPages();
        }
        return $total;
    }
}