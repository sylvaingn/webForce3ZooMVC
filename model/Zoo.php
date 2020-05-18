<?php


class Zoo {

    private $id;
    private $name;
    private $city;

    /**
     * Nom de la table en BDD
     * On le met en public car il n'a pas besoin d'avoir de Getter (en effet la donnée est écrite en "dur")
     * 
     * @var string
     */
    public $tableName = "Zoo";


    public function __construct($newName, $newCity)
    {
        $this->name = $newName;
        $this->city = $newCity;
    }



    /**
     * @return int
     */
    public function getId(){
        return $this->id;
    }

    /**
     * @param integer $id
     * @return self
     */
    public function setId(int $id){

        $this->id = $id;
        return $this;
    }



    /**
     * @return string
     */
    public function getName(){
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(string $name){

        $this->name = $name;
        return $this;
    }



    /**
     * @return string
     */
    public function getCity(){
        return $this->city;
    }

    /**
     * @param string $city
     * @return self
     */
    public function setCity(string $city){

        $this->city = $city;
        return $this;
    }


}

/* $Zoo1 = new Zoo("Le Zoo Rigolo", "Lyon");

var_dump($Zoo1);   */



?>