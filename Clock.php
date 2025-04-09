<?php
class Clock
{
	private int $tick = 0;
    private array $observers = []; //Observer[]

    public function subscribe(Observer $observer) {}

    public function tick()
    {
	  $this->tick++;
      // Notifier les abonnés ici (places, dashboard...)
    }

    public function isNight(): bool
    {
        $currentInCycle = $this->tick % 24; // 24 ticks = 1 journée
        return $currentInCycle >= 12;
    }

    public function getTick(): int
    {
        return $this->tick;
    }
}