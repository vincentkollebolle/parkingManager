<?php
Parking
{
    private int $totalSpots;
    private int $usedSpots = 0;

    public function __construct(int $totalSpots)
    {
        $this->totalSpots = $totalSpots;
    }

    public function canPark(Vehicle $vehicle): bool
    {
        return ($this->usedSpots + $vehicle->size) <= $this->totalSpots;
    }

    public function park(Vehicle $vehicle)
    {
        $this->usedSpots += $vehicle->size;
    }
}