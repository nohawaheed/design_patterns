<?php

namespace App\OOP\Concepts;

abstract class Car
{
    protected string $brand;
    protected string $model;
    protected int $year;
    protected int $speed;
    protected int $seats;
    protected string $color;
    protected int $price;
    protected bool $isOn = false;
    protected ?CarDashboard $dashboard = null;

    public function __construct(string $brand, string $model, int $year, int $speed, int $seats, string $color, int $price)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->speed = $speed;
        $this->seats = $seats;
        $this->color = $color;
        $this->price = $price;
    }

    public abstract function drive(): void;
    public abstract function stop(): void;
    public abstract function honk(): void;
    public abstract function turnOn(): void;
    public abstract function turnOff(): void;
    public abstract function accelerate(int $speed): void;

    public abstract function park(): void;

    // the car dashboard is encapsulated "wrapped in a single unit" in the CarDashboard class
    public function installDashboard(CarDashboard $dashboard): void
    {
        $this->dashboard = $dashboard;
    }

    public function getDashboardInfo(): string
    {
        if ($this->dashboard === null) {
            return "Dashboard is not installed";
        }
        return $this->dashboard->displayDashboard();
    }
}