<?php

class Reponse{

    private $idCommentaire;
    private $idCommentaireReponse;
    

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
     * Get the value of idCommentaireReponse
     */ 
    public function getIdCommentaireReponse()
    {
        return $this->idCommentaireReponse;
    }

    /**
     * Set the value of idCommentaireReponse
     *
     * @return  self
     */ 
    public function setIdCommentaireReponse($idCommentaireReponse)
    {
        $this->idCommentaireReponse = $idCommentaireReponse;

        return $this;
    }
}


?>