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
        //1. créer un véhicule $vehicle
        //2. essayer de le garer $vehicle->tryToPark($this->parking)
    }
}
