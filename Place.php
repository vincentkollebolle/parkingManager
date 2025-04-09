<?php
class Place implements ClockObserver
{
    private ?Vehicle $vehicle = null;
    private int $basePrice;
    private int $maxSize;
    private Parking $parking; // Référence au Parking pour payer


	public function __construct(int $basePrice, int $maxSize, Parking $parking)
    {
        //...
    }
    
    public function isAvailable(): bool
    {
        //...
    }

    public function parkVehicle(Vehicle $vehicle): bool
    {
        //...
    }

	public function releaseVehicle() {
		//Fait payer la personne puis...
		//libère la place ...
	}
    
    public function onTick(): void
    {
        //Demande au vehicule de "veillir"
        //Si il y'a une voiture on lui decrease sont remainingTime...
        //Si elle a fini sa pause on la fait partir...
    }

}