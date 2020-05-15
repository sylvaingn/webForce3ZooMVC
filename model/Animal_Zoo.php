<?php


class Animal_Zoo {

    public $animal_id;
    public $zoo_id;

    public function __construct($newAnimalId, $newZooId)
    {
        $this->animal_id = $newAnimalId;
        $this->zoo_id = $newZooId;
    }

    public function getAttributs(){
        return "L'animal numéro : ".$this->animal_id.", vient du zoo numéro : ".$this->zoo_id.".";
    }
}


?>