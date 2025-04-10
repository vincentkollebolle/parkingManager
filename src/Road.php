<?php

class Road
{
    private $parking;

    public function __construct(Parking $parking)
    {
        $this->parking = $parking;
    }

    public function vehicleArrives()
    {
        $vehicle = new Vehicle(); 
        $vehicle->tryToPark($this->parking);
    }
}
