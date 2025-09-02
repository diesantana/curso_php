<?php

class CellPhone {
    public $brand;
    public $model;
    public $storage;

    public function technicalSheet() {
        echo "Celular: {$this->brand} | Modelo: {$this->model} | Armazenamento: {$this->storage} <br>";  
    }
}

$iphone = new CellPhone();
$iphone->brand = 'Apple';
$iphone->model = 'Iphone 14 Pro';
$iphone->storage = '256GB';
$iphone->technicalSheet();

$samsung = new CellPhone();
$samsung->brand = 'Samsung';
$samsung->model = 'Galaxy S23 Ultra';
$samsung->storage = '512GB';
$samsung->technicalSheet();