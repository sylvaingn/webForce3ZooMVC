<?php


class Animal {

    public $species;
    public $country;

    public function __construct($newSpecies, $newCountry)
    {
        $this->species = $newSpecies;
        $this->country = $newCountry;
    }

    public function getAttributs(){
        return "L'animal : ".$this->species." vient de/d' ".$this->country.".";
    }
}

$melman = new Animal("Girafe", "Afrique");

var_dump($melman);  

echo $melman->getAttributs();
?>