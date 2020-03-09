<?php

class Article{

    private $idArticle;
    private $titreArticle;
    private $imageArticle;
    private $contenuArticle;
    private $idUtilisateur;


    /**
     * Get the value of idArticle
     */ 
    public function getIdArticle()
    {
        return $this->idArticle;
    }

    /**
     * Set the value of idArticle
     *
     * @return  self
     */ 
    public function setIdArticle($idArticle)
    {
        $this->idArticle = $idArticle;

        return $this;
    }

    /**
     * Get the value of titreArticle
     */ 
    public function getTitreArticle()
    {
        return $this->titreArticle;
    }

    /**
     * Set the value of titreArticle
     *
     * @return  self
     */ 
    public function setTitreArticle($titreArticle)
    {
        $this->titreArticle = $titreArticle;

        return $this;
    }

    /**
     * Get the value of imageArticle
     */ 
    public function getImageArticle()
    {
        return $this->imageArticle;
    }

    /**
     * Set the value of imageArticle
     *
     * @return  self
     */ 
    public function setImageArticle($imageArticle)
    {
        $this->imageArticle = $imageArticle;

        return $this;
    }

    /**
     * Get the value of contenuArticle
     */ 
    public function getContenuArticle()
    {
        return $this->contenuArticle;
    }

    /**
     * Set the value of contenuArticle
     *
     * @return  self
     */ 
    public function setContenuArticle($contenuArticle)
    {
        $this->contenuArticle = $contenuArticle;

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