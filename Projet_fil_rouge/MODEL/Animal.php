<?php

class Animal{

    private $idAnimal;
    private $nomAnimal;
    private $naissanceAnimal;
    private $sexeAnimal;
    private $photoAnimal;
    private $descriptionAnimal;
    private $idEspece;
    


    /**
     * Get the value of idAnimal
     */ 
    public function getIdAnimal()
    {
        return $this->idAnimal;
    }

    /**
     * Set the value of idAnimal
     *
     * @return  self
     */ 
    public function setIdAnimal($idAnimal)
    {
        $this->idAnimal = $idAnimal;

        return $this;
    }

    /**
     * Get the value of nomAnimal
     */ 
    public function getNomAnimal()
    {
        return $this->nomAnimal;
    }

    /**
     * Set the value of nomAnimal
     *
     * @return  self
     */ 
    public function setNomAnimal($nomAnimal)
    {
        $this->nomAnimal = $nomAnimal;

        return $this;
    }

    /**
     * Get the value of naissanceAnimal
     */ 
    public function getNaissanceAnimal()
    {
        return $this->naissanceAnimal;
    }

    /**
     * Set the value of naissanceAnimal
     *
     * @return  self
     */ 
    public function setNaissanceAnimal($naissanceAnimal)
    {
        $this->naissanceAnimal = $naissanceAnimal;

        return $this;
    }

    /**
     * Get the value of sexeAnimal
     */ 
    public function getSexeAnimal()
    {
        return $this->sexeAnimal;
    }

    /**
     * Set the value of sexeAnimal
     *
     * @return  self
     */ 
    public function setSexeAnimal($sexeAnimal)
    {
        $this->sexeAnimal = $sexeAnimal;

        return $this;
    }

    /**
     * Get the value of photoAnimal
     */ 
    public function getPhotoAnimal()
    {
        return $this->photoAnimal;
    }

    /**
     * Set the value of photoAnimal
     *
     * @return  self
     */ 
    public function setPhotoAnimal($photoAnimal)
    {
        $this->photoAnimal = $photoAnimal;

        return $this;
    }

    /**
     * Get the value of descriptionAnimal
     */ 
    public function getDescriptionAnimal()
    {
        return $this->descriptionAnimal;
    }

    /**
     * Set the value of descriptionAnimal
     *
     * @return  self
     */ 
    public function setDescriptionAnimal($descriptionAnimal)
    {
        $this->descriptionAnimal = $descriptionAnimal;

        return $this;
    }

  

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
}

?>