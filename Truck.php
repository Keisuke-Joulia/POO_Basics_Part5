<?php

require_once 'Vehicle.php';

final class Truck extends Vehicle
{
    private string $energy;

    private int $energyLevel;

    private int $storageCapacity;

    private int $charge = 0;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public const MAX_CAPACITY = 100;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setStorageCapacity($storageCapacity);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
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

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        if ($storageCapacity > self::MAX_CAPACITY) {
            $this->storageCapacity = self::MAX_CAPACITY;
        }
        else {
            $this->storageCapacity = $storageCapacity;
        }
    }

    
    public function getCharge(): int
    {
        return $this->charge;
    }

    
    public function setCharge(int $charge): void
    {
        if ($charge > $this->storageCapacity){
            $this->charge = $this->storageCapacity;
        }
        else {
            $this->charge = $charge;
        }
    }

    public function storageControl(): string
    {
        if($this->getStorageCapacity() > $this->getCharge()){
            return 'in filling';
        }
        else {
            return 'Full';
        }
    }
}