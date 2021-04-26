<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

final class Car extends Vehicle implements LightableInterface
{
    private string $energy;

    private int $energyLevel;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric'
    ];

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function switchOn(): bool
    {
        return true;
    }


    public function switchOff(): bool
    {
        return false;
    }
}