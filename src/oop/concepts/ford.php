<?php

namespace App\OOP\Concepts;

 class Ford extends Car {
    public function drive(): void {
        $this->turnOn();
        $this->accelerate(60);
        echo "Ford is driving\n";
    }

    public function stop(): void {
        $this->speed = 0;
        $this->turnOff();
        echo "Ford is stopping\n";
    }

    public function honk(): void {
        echo "Ford is honking\n";
    }

    public function turnOn(): void {
        $this->isOn = true;
        echo "Ford is turning on\n";
    }

    public function turnOff(): void {
        $this->isOn = false;
        echo "Ford is turning off\n";
    }

    public function park(): void {
        echo "Ford is parking\n";
    }

    public function accelerate(int $speed): void {
        echo "Ford is accelerating to $speed km/h\n";
    }
}