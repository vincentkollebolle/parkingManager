<?php
class Parking
{
    private array $places = []; // Array of Place[]
    private Tirelire $tirelire;

    public function __construct(int $numberOfPlaces)
    {
        //créer nombre de places...
        //instancie la Tirelire ...
    }


    public function __construct()
    {
		//...
	}

    public function findFreePlaceFor(Vehicle $vehicle): ?Place
    {
        //...
    }
	
	public function tryToPark(Vehicle $vehicle): bool
    {
	    // Quand Parking cherche une place libre ET compatible
    }

    public function parkVehicle(Vehicle $vehicle): bool
    {
        //...
    }
	
	public function collectPayment(int $amount)
    {
        //...
    }

}