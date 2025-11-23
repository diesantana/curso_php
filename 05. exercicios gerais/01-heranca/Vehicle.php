<?php

class Vehicle {
    protected string $brand;
    protected string $model;

    public function __construct(string $brand, string $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function showDetails() {
        echo "Marca: $this->brand, Modelo: $this->model";
    }
}