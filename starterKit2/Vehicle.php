<?php
class Vehicle
{
    private int $size;
    private int $remainingIterations;

    public function __construct(int $size, int $remainingIterations)
    {
        $this->size = $size;
        $this->remainingTime = $remainingTime;
    }

    public function getSize(): int
    {
        return $this->size;
    }

	public function isReadyToLeave(): bool {
		//...
	}

	public function decreaseTime() {
		// ...
	}

}