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
    private $motDePasse;
    private $nomRole;
    

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
     * Get the value of nomRole
     */ 
    public function getNomRole()
    {
        return $this->nomRole;
    }

    /**
     * Set the value of nomRole
     *
     * @return  self
     */ 
    public function setNomRole($nomRole)
    {
        $this->nomRole = $nomRole;

        return $this;
    }

    /**
     * Get the value of motDePasse
     */ 
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

    /**
     * Set the value of motDePasse
     *
     * @return  self
     */ 
    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }
}



?>