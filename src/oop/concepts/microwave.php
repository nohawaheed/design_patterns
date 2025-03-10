<?php

namespace App\OOP\Concepts;

class Microwave
{
    private string $brand;
    private string $model;
    private int $power;
    private int $timer;

    public function __construct(string $brand, string $model, int $power, int $timer){
        $this->brand = $brand;
        $this->model = $model;
        $this->power = $power;
        $this->timer = $timer;
    }


    public function deFreeze(): string
    {
        $this->turnOn();
        $this->setPower($this->power);
        $this->setTimer($this->timer);
        return "Microwave defreezing\n at power: {$this->power} and timer: {$this->timer}";
    }
    private function turnOn(): void
    {
        echo "Microwave turned on\n";
    }

    private function turnOff(): void
    {
        echo "Microwave turned off\n";
    }

    private function setPower(int $power): void
    {
        $this->power = $power;
    }

    private function setTimer(int $timer): void
    {
        $this->timer = $timer;
    }
}