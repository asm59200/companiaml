<?php

class Commentaire{

    private $idCommentaire;
    private $dateCommentaire;
    private $contenuCommentaire;
    private $idTopic;
    

    /**
     * Get the value of idCommentaire
     */ 
    public function getIdCommentaire()
    {
        return $this->idCommentaire;
    }

    /**
     * Set the value of idCommentaire
     *
     * @return  self
     */ 
    public function setIdCommentaire($idCommentaire)
    {
        $this->idCommentaire = $idCommentaire;

        return $this;
    }

    /**
     * Get the value of dateCommentaire
     */ 
    public function getDateCommentaire()
    {
        return $this->dateCommentaire;
    }

    /**
     * Set the value of dateCommentaire
     *
     * @return  self
     */ 
    public function setDateCommentaire($dateCommentaire)
    {
        $this->dateCommentaire = $dateCommentaire;

        return $this;
    }

    /**
     * Get the value of contenuCommentaire
     */ 
    public function getContenuCommentaire()
    {
        return $this->contenuCommentaire;
    }

    /**
     * Set the value of contenuCommentaire
     *
     * @return  self
     */ 
    public function setContenuCommentaire($contenuCommentaire)
    {
        $this->contenuCommentaire = $contenuCommentaire;

        return $this;
    }

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
}


?>