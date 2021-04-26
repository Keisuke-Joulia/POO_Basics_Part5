<?php

abstract class HighWay 
{
    protected array $currentVehicles;
    protected int $nbLines;
    protected int $maxSpeed;

    public function __construct()
    {
        $this->setCurrentVehicles(array());
    }

    abstract public function addVehicle(Vehicle $vehicle);

    /**
     * Get the value of currentVehicles
     */ 
    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }

    /**
     * Set the value of currentVehicles
     *
     * @return  self
     */ 
    public function setCurrentVehicles(array $currentVehicles)
    {
        $this->currentVehicles = $currentVehicles;

        return $this;
    }

    /**
     * Get the value of nbLines
     */ 
    public function getNbLines()
    {
        return $this->nbLines;
    }

    /**
     * Set the value of nbLines
     *
     * @return  self
     */ 
    public function setNbLines($nbLines)
    {
        $this->nbLines = $nbLines;

        return $this;
    }

    /**
     * Get the value of maxSpeed
     */ 
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * Set the value of maxSpeed
     *
     * @return  self
     */ 
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }
}