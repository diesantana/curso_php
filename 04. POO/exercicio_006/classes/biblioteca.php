<?php
declare(strict_types=1);

class Biblioteca{
    private array $livros;

    public function adicionarLivro(Livro $livro):void {
        array_push($this->livros, $livro);
    }

    public function listarLivros(Livro $livro):array {
        return $this->livros;
    }
}