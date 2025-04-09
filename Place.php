<?php
abstract class Place implements ClockObserver
{
    protected ?Vehicle $vehicle = null;
    protected int $basePrice;
    protected int $maxSize;
    protected Parking $parking;

    public function __construct(int $basePrice, int $maxSize, Parking $parking)
    {
        $this->basePrice = $basePrice;
        $this->maxSize = $maxSize;
        $this->parking = $parking;
    }

    abstract public function isAvailable(): bool;

    abstract public function parkVehicle(Vehicle $vehicle): bool;

    abstract public function releaseVehicle(): void;

    abstract public function onTick(): void;
}