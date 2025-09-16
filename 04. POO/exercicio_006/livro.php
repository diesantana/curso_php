<?php
declare(strict_types=1);
class Livro{
    private string $title;
    private string $author;
    private int $pages;

    public function __construct(string $title, string $author, int $pages) {
        $this->title = $title;
        $this->author = $author;
        $this->pages = $pages;
    }

    public function getTitle():string {
        return $this->title;
    }

    public function setTitle(string $newTitle):void {
        $this->title = $newTitle;
    }
    
    public function getAuthor():string {
        return $this->author;
    }

    public function setAuthor(string $newAuthor):void {
        $this->author = $newAuthor;
    }
    
    public function getPages():int {
        return $this->pages;
    }

    public function setPages(int $newPages):void {
        $this->pages = $newPages;
    }

    public function details():string {
        return "{$this->title}, escrito por {$this->author}, possui {$this->pages} páginas.";
    }
}
