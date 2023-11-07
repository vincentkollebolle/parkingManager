<?php
class Place {
    private $isFree = true; 
    private $voiture = null;

    public function isFree() {
        return $this->isFree;
    }

    public function setVoiture(Voiture $voiture) {
        $this->voiture = $voiture;
        $this->isFree = false;
    }

    public function getVoiture() {
        return $this->voiture;
    }
}