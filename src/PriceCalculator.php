<?php
//calcul ds prix
abstract class Pricing {
    //arrival Tick ? 
    public function calculatePrice(Place $place): int;
}