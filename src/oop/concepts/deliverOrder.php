<?php

namespace App\OOP\Concepts;

class DeliverOrder
{
    private $source;
    private $destination;
    private $weight;
    private $status;

    public function __construct(string $source, string $destination, int $weight)
    {
        $this->source = $source;
        $this->destination = $destination;
        $this->weight = $weight;
        $this->status = "Pending";
    }
    public function deliverOrder(Car $car): void {
        $car->drive();
        $car->stop();
        $car->park();
        $this->status = "Delivered";
        echo "Moving from $this->source to $this->destination to deliver a package of $this->weight KG\n";
    }

    public function getStatus(): string {
        return $this->status;
    }

}