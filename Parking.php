<?php

interface ParkingInterface
{
    public function findFreePlaceFor(Vehicle $vehicle): ?Place;
    public function tryToPark(Vehicle $vehicle): bool;
    public function parkVehicle(Vehicle $vehicle): bool;
    public function collectPayment(int $amount): void;
}
