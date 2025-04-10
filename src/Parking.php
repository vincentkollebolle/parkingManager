<?php
class Parking {
    private $nbPlaces;
    private $nbLeftPlaces;
    private $places = [];

    public function __construct($nbPlaces) {
        $this->nbPlaces = $nbPlaces;
        $this->nbLeftPlaces = $nbPlaces;
        $this->initPlaces();
    }

    private function initPlaces() {
        for ($i = 0; $i < $this->nbPlaces; $i++) {
            $this->places[] = new Place(10, 3, $this);  
        }
    }

    public function tryToPark(Vehicle $vehicle): bool {
        foreach ($this->places as $place) {
            if ($place->isAvailable()) {  
                $place->parkVehicle($vehicle);
                $this->nbLeftPlaces--;
                return true;
            }
        }
        return false;
    }

    public function getLeftPlaces(): int {
        return $this->nbLeftPlaces;
    }

}
