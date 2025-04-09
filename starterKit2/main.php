<?php
$parking = new Parking(10); 
$road = new Road($parking);
$clock = new Clock();
$dashboard = new Dashboard(...);

for ($i = 0; $i < 100; $i++) {
    $clock->tick();
	$dashboard->update();
}
?>