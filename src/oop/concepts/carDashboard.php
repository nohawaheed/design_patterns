<?php

namespace App\OOP\Concepts;

class CarDashboard 
{
    private $oilLevel;
    private $fuelLevel;
    private $temperature;

    public function __construct(int $oilLevel, int $fuelLevel, int $temperature)
    {
        $this->oilLevel = $oilLevel;
        $this->fuelLevel = $fuelLevel;
        $this->temperature = $temperature;
    }
    private function getOilLevel(): int {
        return $this->oilLevel;
    }

    private function getFuelLevel(): int {
        return $this->fuelLevel;
    }

    private function getTemperature(): int {
        return $this->temperature;
    }
    public function displayDashboard(): string {
        return "Oil Level: {$this->getOilLevel()} \n Fuel Level: {$this->getFuelLevel()} \n Temperature: {$this->getTemperature()}  \n";
    }
}