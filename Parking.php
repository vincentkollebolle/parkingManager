<?php
require_once("Place.php");

class Parking {
    private static $_instance = null; //unparking
    private $capacity = 8; 
    private $places; //talbeau de places

    private function __construct() {
        $this->places = [];
        for($i=0;$i<$this->capacity;$i++) {
            $unePlace = new Place();
            $this->places[] = $unePlace;
        }
    }

    public function getNumberOfCarsInParking() {
        $compteur=0;
        foreach($this->places as $place){
            if($place->getVoiture()) { $compteur++; }
        }
        return $compteur; 
    }

    public function getNbOfFreePlaces() {
        return $this->capacity - $this->getNumberOfCarsInParking();
    }

    public static function getInstance() {
        if(is_null(self::$_instance)) {
            self::$_instance = new Parking();  
          }
          return self::$_instance;
    }

    public function afficherParking() {
        echo "<h2>Le parking contient</h2>";
        foreach($this->places as $currentPlace) {
            if($currentPlace->isFree()) {
                echo "place libre<br/>";
            } else {
                echo "place occupée "; 
                //get current voiture 
                print_r($currentPlace->getVoiture());
                echo "<br />";                
            }
        }
    }

    public function addVoiture(Voiture $voiture) {
        //check if enought spaces
        $carAdded = false;
        if($voiture->getSize() <= $this->getNbOfFreePlaces()) {    
            //on ajoute autant de voiture que la size de celle-ci
            $placeTaken = $voiture->getSize();
            foreach($this->places as $place) {
                if($placeTaken > 0) {
                    if($place->isFree()) {
                        $place->setVoiture($voiture);
                        $placeTaken--;
                    }
                } else {
                    return;
                }
            }
        } else {
            echo "<span class='error'>il n'y a plus assez de place ...</span><br/>";
        }
    }
}
