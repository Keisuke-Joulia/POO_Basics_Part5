<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function __construct()
    {
        parent::__construct();
        $this->setNbLines(4);
        $this->setMaxSpeed(130);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car) {
            $currentVehicle = $this->getCurrentVehicles($vehicle);
            array_push($currentVehicle, $vehicle);
            $this->setCurrentVehicles($currentVehicle);
        }
    }
}