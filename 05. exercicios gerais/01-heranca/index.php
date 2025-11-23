<?php
require_once 'Car.php';
require_once 'Motorcycle.php';

$car = new Car('Toyota', 'Corolla');
$motorcycle = new Motorcycle('Honda', 'CG 160');

// $car->showDetails();
// $motorcycle->showDetails();
// $car->OpenDoor();
$motorcycle->wheelie();

