<?php

class Refuge{

    private $idRefuge;
    private $nomRefuge;
    private $adresseRefuge;
    private $codePostalRefuge;
    private $villeRefuge;
    private $photoRefuge;
    private $emailRefuge;
    private $telephoneRefuge;
    private $idUtilisateur;
    

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
     * Get the value of nomRefuge
     */ 
    public function getNomRefuge()
    {
        return $this->nomRefuge;
    }

    /**
     * Set the value of nomRefuge
     *
     * @return  self
     */ 
    public function setNomRefuge($nomRefuge)
    {
        $this->nomRefuge = $nomRefuge;

        return $this;
    }

    /**
     * Get the value of adresseRefuge
     */ 
    public function getAdresseRefuge()
    {
        return $this->adresseRefuge;
    }

    /**
     * Set the value of adresseRefuge
     *
     * @return  self
     */ 
    public function setAdresseRefuge($adresseRefuge)
    {
        $this->adresseRefuge = $adresseRefuge;

        return $this;
    }

    /**
     * Get the value of codePostalRefuge
     */ 
    public function getCodePostalRefuge()
    {
        return $this->codePostalRefuge;
    }

    /**
     * Set the value of codePostalRefuge
     *
     * @return  self
     */ 
    public function setCodePostalRefuge($codePostalRefuge)
    {
        $this->codePostalRefuge = $codePostalRefuge;

        return $this;
    }

    /**
     * Get the value of villeRefuge
     */ 
    public function getVilleRefuge()
    {
        return $this->villeRefuge;
    }

    /**
     * Set the value of villeRefuge
     *
     * @return  self
     */ 
    public function setVilleRefuge($villeRefuge)
    {
        $this->villeRefuge = $villeRefuge;

        return $this;
    }

    /**
     * Get the value of photoRefuge
     */ 
    public function getPhotoRefuge()
    {
        return $this->photoRefuge;
    }

    /**
     * Set the value of photoRefuge
     *
     * @return  self
     */ 
    public function setPhotoRefuge($photoRefuge)
    {
        $this->photoRefuge = $photoRefuge;

        return $this;
    }

    /**
     * Get the value of emailRefuge
     */ 
    public function getEmailRefuge()
    {
        return $this->emailRefuge;
    }

    /**
     * Set the value of emailRefuge
     *
     * @return  self
     */ 
    public function setEmailRefuge($emailRefuge)
    {
        $this->emailRefuge = $emailRefuge;

        return $this;
    }

    /**
     * Get the value of telephoneRefuge
     */ 
    public function getTelephoneRefuge()
    {
        return $this->telephoneRefuge;
    }

    /**
     * Set the value of telephoneRefuge
     *
     * @return  self
     */ 
    public function setTelephoneRefuge($telephoneRefuge)
    {
        $this->telephoneRefuge = $telephoneRefuge;

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