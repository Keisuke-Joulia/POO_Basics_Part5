<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public function __construct()
    {
        parent::__construct();
        $this->setNbLines(2);
        $this->setMaxSpeed(50);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        $currentVehicle = $this->getCurrentVehicles($vehicle);
        array_push($currentVehicle, $vehicle);
        $this->setCurrentVehicles($currentVehicle);
    }
}