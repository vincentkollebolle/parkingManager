<?php
class Dashboard
{
    private Horloge $horloge;
    private Parking $parking;
    private Road $road;
    private Tirelire $tirelire;

    public function __construct(Horloge $horloge, Parking $parking, Road $road, Tirelire $tirelire)
    {
        $this->horloge = $horloge;
        $this->parking = $parking;
        $this->road = $road;
        $this->tirelire = $tirelire;
    }

    public function update()
    {
        echo "Cycle : " . $this->horloge->getTick();
        echo "Moment : " . ($this->horloge->isNight() ? "Nuit" : "Jour");
        echo "Véhicules en circulation : " . $this->road->countVehicles();
        echo "Véhicules garés : " . $this->parking->countParkedVehicles();
        echo "Montant Tirelire : " . $this->tirelire->getAmount() . "€";
        echo "--------------------------------";
    }
}