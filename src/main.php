<?php
require_once "Parking.php";
require_once "Road.php";
require_once "Dashboard.php";
require_once "Vehicle.php";
//include "Clock.php";

$parking = new Parking(10); 
$road = new Road($parking);
$dashboard = new Dashboard();
//$clock = new Clock();

for ($i = 0; $i < 100; $i++) {
    $dashboard->update();
    //$clock->tick();
}


?>