<?php

require_once 'require.php';

var_dump(Car::ALLOWED_ENERGIES);

$bicycle = new Bicycle("blue", 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

$truck = new Truck('reed', 3, 'fuel', 100);
$truck->setCharge(50);
echo $truck->forward();
var_dump($truck);

echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake() . '<br>';
echo 'Le camion est: ' . $truck->storageControl();

$motorWay = new MotorWay ();
$motorWay->addVehicle(new Car('green', 5, 'electric'));
var_dump($motorWay);

$residentialWay = new ResidentialWay ();
$residentialWay->addVehicle(new Truck('white', 3, 'fuel', 200));
var_dump($residentialWay);

$pedestrianWay = new PedestrianWay ();
$pedestrianWay->addVehicle(new Bicycle('orange', 1));
var_dump($pedestrianWay);