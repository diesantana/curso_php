<?php
require_once 'Vehicle.php';

class Car extends Vehicle {
    public function OpenDoor() {
        echo "A porta do carro foi aberta";
    }
}