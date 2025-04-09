<?php
interface VehicleInterface
{
    public function getSize(): int;
    public function isReadyToLeave(): bool;
    public function decreaseTime(): void;
}
