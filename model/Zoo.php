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
        return "Le zoo a pour nom : ".$this->name." et est situé à ".$this->city.".";
    }
}

$Zoo1 = new Zoo("Le Zoo Rigolo", "Lyon");

var_dump($Zoo1);  

echo $Zoo1->getAttributs();

?>