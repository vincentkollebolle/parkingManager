<?php
class Voiture { 
    private $immat;
    private $size; 
    
    public function __construct($immat, $size=1) {
        $this->$immat = $immat;
        $this->size=$size;
    }

    public function getimmat() {
        return $this->immat;
    }
    
    public function getSize() {
        return $this->size;
    }
}