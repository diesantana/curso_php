# 🧑‍💻 Exercício: Tipagem Estrita no Sistema de Biblioteca

## 🚀 Cenário
Você está desenvolvendo um sistema de **biblioteca online**.

O objetivo é treinar a **declaração strict types**, definindo corretamente os tipos de **propriedades, parâmetros e retornos** em classes e funções.

---

## 📌 Regras de Negócio

1. Ative o strict types no topo do arquivo com:
    
    ```php
    declare(strict_types=1);
    
    ```
    
2. Crie uma classe chamada `Livro`.
    - Propriedades:
        - `titulo` (string)
        - `autor` (string)
        - `paginas` (int)
    - O **construtor** deve receber esses três parâmetros, com tipagem obrigatória.
3. Crie um método `detalhes(): string` que deve retornar a seguinte mensagem:
    
    ```
    "{titulo}, escrito por {autor}, possui {paginas} páginas."
    
    ```
    
4. Crie uma classe `Biblioteca`.
    - Deve ter uma propriedade `livros` (array de objetos `Livro`).
    - Método `adicionarLivro(Livro $livro): void` que adiciona um livro ao array.
    - Método `listarLivros(): array` que retorna todos os livros cadastrados.
5. No fluxo de teste:
    - Crie dois ou três livros.
    - Adicione-os à biblioteca.
    - Liste os livros e exiba seus detalhes.

---

## 🎯 Desafios Extras (opcional)

- Garanta que **apenas objetos da classe `Livro`** possam ser adicionados à biblioteca (o strict types já ajuda nisso).
- Crie um método `buscarPorAutor(string $autor): array` que retorna apenas os livros daquele autor.
- Crie um método `contarPaginasTotais(): int` que soma as páginas de todos os livros.

---

## 📊 Saída Esperada (exemplo)

```
1984, escrito por George Orwell, possui 328 páginas.
O Senhor dos Anéis, escrito por J.R.R. Tolkien, possui 1178 páginas.
Dom Casmurro, escrito por Machado de Assis, possui 256 páginas.

Livros de Tolkien:
O Senhor dos Anéis, escrito por J.R.R. Tolkien, possui 1178 páginas.

Total de páginas da biblioteca: 1762

```