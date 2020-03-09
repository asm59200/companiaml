<?php

class Espece{

    private $idEspece;
    private $nomEspece;
    private $raceEspece;
        

    /**
     * Get the value of idEspece
     */ 
    public function getIdEspece()
    {
        return $this->idEspece;
    }

    /**
     * Set the value of idEspece
     *
     * @return  self
     */ 
    public function setIdEspece($idEspece)
    {
        $this->idEspece = $idEspece;

        return $this;
    }

    /**
     * Get the value of nomEspece
     */ 
    public function getNomEspece()
    {
        return $this->nomEspece;
    }

    /**
     * Set the value of nomEspece
     *
     * @return  self
     */ 
    public function setNomEspece($nomEspece)
    {
        $this->nomEspece = $nomEspece;

        return $this;
    }

    /**
     * Get the value of raceEspece
     */ 
    public function getRaceEspece()
    {
        return $this->raceEspece;
    }

    /**
     * Set the value of raceEspece
     *
     * @return  self
     */ 
    public function setRaceEspece($raceEspece)
    {
        $this->raceEspece = $raceEspece;

        return $this;
    }
}


?>