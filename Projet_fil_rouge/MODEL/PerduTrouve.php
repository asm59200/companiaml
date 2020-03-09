<?php

class PerduTrouve{

    private $idPerduTrouve;
    private $titrePerduTrouve;
    private $typePerduTrouve;
    private $lieuPerduTrouve;
    private $datePerduTrouve;
    private $codePostalPerduTrouve;
    private $idUtilisateur;
    private $idEspece;
    

    /**
     * Get the value of idPerduTrouve
     */ 
    public function getIdPerduTrouve()
    {
        return $this->idPerduTrouve;
    }

    /**
     * Set the value of idPerduTrouve
     *
     * @return  self
     */ 
    public function setIdPerduTrouve($idPerduTrouve)
    {
        $this->idPerduTrouve = $idPerduTrouve;

        return $this;
    }

    /**
     * Get the value of titrePerduTrouve
     */ 
    public function getTitrePerduTrouve()
    {
        return $this->titrePerduTrouve;
    }

    /**
     * Set the value of titrePerduTrouve
     *
     * @return  self
     */ 
    public function setTitrePerduTrouve($titrePerduTrouve)
    {
        $this->titrePerduTrouve = $titrePerduTrouve;

        return $this;
    }

    /**
     * Get the value of typePerduTrouve
     */ 
    public function getTypePerduTrouve()
    {
        return $this->typePerduTrouve;
    }

    /**
     * Set the value of typePerduTrouve
     *
     * @return  self
     */ 
    public function setTypePerduTrouve($typePerduTrouve)
    {
        $this->typePerduTrouve = $typePerduTrouve;

        return $this;
    }

    /**
     * Get the value of lieuPerduTrouve
     */ 
    public function getLieuPerduTrouve()
    {
        return $this->lieuPerduTrouve;
    }

    /**
     * Set the value of lieuPerduTrouve
     *
     * @return  self
     */ 
    public function setLieuPerduTrouve($lieuPerduTrouve)
    {
        $this->lieuPerduTrouve = $lieuPerduTrouve;

        return $this;
    }

    /**
     * Get the value of datePerduTrouve
     */ 
    public function getDatePerduTrouve()
    {
        return $this->datePerduTrouve;
    }

    /**
     * Set the value of datePerduTrouve
     *
     * @return  self
     */ 
    public function setDatePerduTrouve($datePerduTrouve)
    {
        $this->datePerduTrouve = $datePerduTrouve;

        return $this;
    }

    /**
     * Get the value of codePostalPerduTrouve
     */ 
    public function getCodePostalPerduTrouve()
    {
        return $this->codePostalPerduTrouve;
    }

    /**
     * Set the value of codePostalPerduTrouve
     *
     * @return  self
     */ 
    public function setCodePostalPerduTrouve($codePostalPerduTrouve)
    {
        $this->codePostalPerduTrouve = $codePostalPerduTrouve;

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
}


?>