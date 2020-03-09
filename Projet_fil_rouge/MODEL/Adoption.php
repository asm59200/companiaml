<?php

class Adoption{

    private $idAdoption;
    private $idUtilisateur;
    private $idRefuge;
    private $animal;
    

    /**
     * Get the value of idAdoption
     */ 
    public function getIdAdoption()
    {
        return $this->idAdoption;
    }

    /**
     * Set the value of idAdoption
     *
     * @return  self
     */ 
    public function setIdAdoption($idAdoption)
    {
        $this->idAdoption = $idAdoption;

        return $this;
    }

    /**
     * Get the value of idUtilisateur
     */ 
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * Set the value of idUtilisateur
     *
     * @return  self
     */ 
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    /**
     * Get the value of idRefuge
     */ 
    public function getIdRefuge()
    {
        return $this->idRefuge;
    }

    /**
     * Set the value of idRefuge
     *
     * @return  self
     */ 
    public function setIdRefuge($idRefuge)
    {
        $this->idRefuge = $idRefuge;

        return $this;
    }

    /**
     * Get the value of animal
     */ 
    public function getAnimal()
    {
        return $this->animal;
    }

    /**
     * Set the value of animal
     *
     * @return  self
     */ 
    public function setAnimal($animal)
    {
        $this->animal = $animal;

        return $this;
    }
}