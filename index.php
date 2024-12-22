<?php

declare(strict_types=1);

require_once 'autoload.php';

use Object\Human\Student as Student;
use Object\Technics\Transport\Car as Car;
use Object\Technics\Electronics\TV as TV;

$student = new Student('Андрей', 'Семёнов', 42, ['HTML', 'CSS', 'JS', 'PHP']);
$student->printStudent();
$student->works();

echo PHP_EOL;

$car = new Car(2015, 'BMW', 'x5');
$car->printCar();
echo $car->drive();
echo Car::carStop();

echo PHP_EOL;

$tv = new TV('Samsung');
$tv->printTV();
$tv->turnOn();
$tv->turnOff();
