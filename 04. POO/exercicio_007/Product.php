<?php

declare(strict_types=1);

class Product {
    private string $name;
    private float $price;

    public function __construct(string $name, float $price) {
        $this->name = $name;
        $this->setPrice($price);
    }
    
    public function setName(string $name) {
        $this->name = $name;
    }

    public function getName() :string {
        return $this->name;
    }
    
    public function setPrice(float $price) {
        if ($price < 0) {
            $this->price = 0;
            echo 'Preço inválido! Definido para 0.' . '<br>';
        } else{
            $this->price = $price;
        }
    }
    
    public function getPrice() :float {
        return $this->price;
    }

}