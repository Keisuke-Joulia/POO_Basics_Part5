<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public function __construct()
    {
        parent::__construct();
        $this->setNbLines(1);
        $this->setMaxSpeed(10);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle) {
            $currentVehicle = $this->getCurrentVehicles($vehicle);
            array_push($currentVehicle, $vehicle);
            $this->setCurrentVehicles($currentVehicle);
        }
    }
}