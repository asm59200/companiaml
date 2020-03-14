<?php
include_once ('../DAO/PetSitterDAO.php');
include_once ('../SERVICE/ServicePetSitter.php');


class PetSitter{

    private $idPetSitter;
    private $titrePetSitter;
    private $distancePetSitter;
    private $typeGardePetSitter;
    private $typeDomicilePetSitter;
    private $dowloadPhotoPetSitter;
    private $presentationTelephone;
    private $descriptionPetSitter;
    private $idUtilisateur;
    private $idEspece;
    

    /**
     * Get the value of idPetSitter
     */ 
    public function getIdPetSitter()
    {
        return $this->idPetSitter;
    }

    /**
     * Set the value of idPetSitter
     *
     * @return  self
     */ 
    public function setIdPetSitter($idPetSitter)
    {
        $this->idPetSitter = $idPetSitter;

        return $this;
    }

    /**
     * Get the value of distancePetSitter
     */ 
    public function getDistancePetSitter()
    {
        return $this->distancePetSitter;
    }

    /**
     * Set the value of distancePetSitter
     *
     * @return  self
     */ 
    public function setDistancePetSitter($distancePetSitter)
    {
        $this->distancePetSitter = $distancePetSitter;

        return $this;
    }

    /**
     * Get the value of typeGardePetSitter
     */ 
    public function getTypeGardePetSitter()
    {
        return $this->typeGardePetSitter;
    }

    /**
     * Set the value of typeGardePetSitter
     *
     * @return  self
     */ 
    public function setTypeGardePetSitter($typeGardePetSitter)
    {
        $this->typeGardePetSitter = $typeGardePetSitter;

        return $this;
    }

    /**
     * Get the value of typeDomicilePetSitter
     */ 
    public function getTypeDomicilePetSitter()
    {
        return $this->typeDomicilePetSitter;
    }

    /**
     * Set the value of typeDomicilePetSitter
     *
     * @return  self
     */ 
    public function setTypeDomicilePetSitter($typeDomicilePetSitter)
    {
        $this->typeDomicilePetSitter = $typeDomicilePetSitter;

        return $this;
    }

    /**
     * Get the value of presentationTelephone
     */ 
    public function getPresentationTelephone()
    {
        return $this->presentationTelephone;
    }

    /**
     * Set the value of presentationTelephone
     *
     * @return  self
     */ 
    public function setPresentationTelephone($presentationTelephone)
    {
        $this->presentationTelephone = $presentationTelephone;

        return $this;
    }

    /**
     * Get the value of descriptionPetSitter
     */ 
    public function getDescriptionPetSitter()
    {
        return $this->descriptionPetSitter;
    }

    /**
     * Set the value of descriptionPetSitter
     *
     * @return  self
     */ 
    public function setDescriptionPetSitter($descriptionPetSitter)
    {
        $this->descriptionPetSitter = $descriptionPetSitter;

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
     * Get the value of dowloadPhotoPetSitter
     */ 
    public function getdowloadPhotoPetSitter()
    {
        return $this->dowloadPhotoPetSitter;
    }

    /**
     * Set the value of dowloadPhotoPetSitter
     *
     * @return  self
     */ 
    public function setdowloadPhotoPetSitter($dowloadPhotoPetSitter)
    {
        $this->dowloadPhotoPetSitter = $dowloadPhotoPetSitter;

        return $this;
    }

    /**
     * Get the value of titrePetSitter
     */ 
    public function getTitrePetSitter()
    {
        return $this->titrePetSitter;
    }

    /**
     * Set the value of titrePetSitter
     *
     * @return  self
     */ 
    public function setTitrePetSitter($titrePetSitter)
    {
        $this->titrePetSitter = $titrePetSitter;

        return $this;
    }
}


?>