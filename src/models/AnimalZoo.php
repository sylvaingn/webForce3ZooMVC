<?php


class AnimalZoo {

    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $animal_id;

    /**
     * @var int
     */
    private $zoo_id;

    /**
     * Nom de la table en BDD
     * On le met en public car il n'a pas besoin d'avoir de Getter (en effet la donnée est écrite en "dur")
     * 
     * @var string
     */
    public $tableName = "Animal";

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(int $id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getAnimalId() : int
    {
        return $this->animal_id;
    }

    /**
     * @param int $animal_id
     * @return self
     */
    public function setAnimalId(int $animal_id)
    {
        $this->animal_id = $animal_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getZooId() : int
    {
        return $this->zoo_id;
    }

    /**
     * @param int $zoo_id description du paramètre
     * @return self
     */
    public function setZooId(int $zoo_id) : self
    {
        $this->zoo_id = $zoo_id;
        return $this;
    }
}

?>