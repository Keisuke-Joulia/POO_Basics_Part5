<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

final class Bicycle extends vehicle implements LightableInterface
{
    public function switchOn(): bool
    {
        if ($this->getCurrentSpeed() > 10) {
        return true;
        }
        return false;
    }

    public function switchOff(): bool
    {
        return false;
    }
}
