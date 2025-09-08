<?php

declare(strict_types=1);

class Character {
    private string $name;
    private string $class;
    private int $level;

    public function __construct(string $name, string $class) {
        $this->name = $name;
        $this->class = $class;
        $this->level = 1;
    }

    public function getName() :string {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
    }
    
    public function getClass() :string {
        return $this->class;
    }
    
    public function setClass(string $class) {
        $this->class = $class;
    }
    
    public function getLevel() :int {
        return $this->level;
    }

    public function showData() :string {
        return "Olá, eu sou $this->name, um  $this->class de nível $this->level!";
    }
    
    public function levelUp() {
        $this->level++;
    }
}

$character1 = new Character('Bob Blue', 'Guerreiro');
$character2 = new Character('Maria Green', 'Mago');

echo $character1->showData();
echo '<br>';
echo $character2->showData();

echo '<br>';
$character1->levelUp();
$character1->levelUp();
echo $character1->showData();
echo '<br>';
echo $character2->showData();