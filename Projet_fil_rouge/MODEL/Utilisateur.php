<?php

class Utilisateur {

    private $idUtilisateur;
    private $nomUtilisateur;
    private $prenomUtilisateur;
    private $adresseUtilisateur;
    private $codePostalUtilisateur;
    private $villeUtilisateur;
    private $telephoneUtilisateur;
    private $email;
    private $idRole;
    

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
     * Get the value of nomUtilisateur
     */ 
    public function getNomUtilisateur()
    {
        return $this->nomUtilisateur;
    }

    /**
     * Set the value of nomUtilisateur
     *
     * @return  self
     */ 
    public function setNomUtilisateur($nomUtilisateur)
    {
        $this->nomUtilisateur = $nomUtilisateur;

        return $this;
    }

    /**
     * Get the value of prenomUtilisateur
     */ 
    public function getPrenomUtilisateur()
    {
        return $this->prenomUtilisateur;
    }

    /**
     * Set the value of prenomUtilisateur
     *
     * @return  self
     */ 
    public function setPrenomUtilisateur($prenomUtilisateur)
    {
        $this->prenomUtilisateur = $prenomUtilisateur;

        return $this;
    }

    /**
     * Get the value of adresseUtilisateur
     */ 
    public function getAdresseUtilisateur()
    {
        return $this->adresseUtilisateur;
    }

    /**
     * Set the value of adresseUtilisateur
     *
     * @return  self
     */ 
    public function setAdresseUtilisateur($adresseUtilisateur)
    {
        $this->adresseUtilisateur = $adresseUtilisateur;

        return $this;
    }

    /**
     * Get the value of codePostalUtilisateur
     */ 
    public function getCodePostalUtilisateur()
    {
        return $this->codePostalUtilisateur;
    }

    /**
     * Set the value of codePostalUtilisateur
     *
     * @return  self
     */ 
    public function setCodePostalUtilisateur($codePostalUtilisateur)
    {
        $this->codePostalUtilisateur = $codePostalUtilisateur;

        return $this;
    }

    /**
     * Get the value of villeUtilisateur
     */ 
    public function getVilleUtilisateur()
    {
        return $this->villeUtilisateur;
    }

    /**
     * Set the value of villeUtilisateur
     *
     * @return  self
     */ 
    public function setVilleUtilisateur($villeUtilisateur)
    {
        $this->villeUtilisateur = $villeUtilisateur;

        return $this;
    }

    /**
     * Get the value of telephoneUtilisateur
     */ 
    public function getTelephoneUtilisateur()
    {
        return $this->telephoneUtilisateur;
    }

    /**
     * Set the value of telephoneUtilisateur
     *
     * @return  self
     */ 
    public function setTelephoneUtilisateur($telephoneUtilisateur)
    {
        $this->telephoneUtilisateur = $telephoneUtilisateur;

        return $this;
    }

       /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of idRole
     */ 
    public function getIdRole()
    {
        return $this->idRole;
    }

    /**
     * Set the value of idRole
     *
     * @return  self
     */ 
    public function setIdRole($idRole)
    {
        $this->idRole = $idRole;

        return $this;
    }

 
}



?>