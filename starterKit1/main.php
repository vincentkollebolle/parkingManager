<?php
$parking = new Parking(10); // 10 places au départ
$road = new Road($parking);

// Simulation : 20 véhicules qui arrivent
for ($i = 0; $i < 20; $i++) {
    $road->vehicleArrives();
}