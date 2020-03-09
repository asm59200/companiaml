<?php

class Topic{

    private $idTopic;
    private $nomTopic;
    private $dateTopic;
    private $contenuTopic;
    private $idUtilisateur;
    

    /**
     * Get the value of idTopic
     */ 
    public function getIdTopic()
    {
        return $this->idTopic;
    }

    /**
     * Set the value of idTopic
     *
     * @return  self
     */ 
    public function setIdTopic($idTopic)
    {
        $this->idTopic = $idTopic;

        return $this;
    }

    /**
     * Get the value of nomTopic
     */ 
    public function getNomTopic()
    {
        return $this->nomTopic;
    }

    /**
     * Set the value of nomTopic
     *
     * @return  self
     */ 
    public function setNomTopic($nomTopic)
    {
        $this->nomTopic = $nomTopic;

        return $this;
    }

    /**
     * Get the value of dateTopic
     */ 
    public function getDateTopic()
    {
        return $this->dateTopic;
    }

    /**
     * Set the value of dateTopic
     *
     * @return  self
     */ 
    public function setDateTopic($dateTopic)
    {
        $this->dateTopic = $dateTopic;

        return $this;
    }

    /**
     * Get the value of contenuTopic
     */ 
    public function getContenuTopic()
    {
        return $this->contenuTopic;
    }

    /**
     * Set the value of contenuTopic
     *
     * @return  self
     */ 
    public function setContenuTopic($contenuTopic)
    {
        $this->contenuTopic = $contenuTopic;

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
}


?>