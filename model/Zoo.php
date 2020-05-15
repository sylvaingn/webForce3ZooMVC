<?php


class Zoo {

    public $name;
    public $city;

    public function __construct($newName, $newCity)
    {
        $this->name = $newName;
        $this->city = $newCity;
    }

    public function getAttributs(){
        return "L'animal : ".$this->name." vient de/d' ".$this->city;
    }
}

$Zoo1 = new Zoo("Le Zoo Rigolo", "Lyon");

var_dump($Zoo1);  

?>