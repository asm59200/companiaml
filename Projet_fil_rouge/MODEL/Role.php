<?php

class Role{

    private $idRole;
    private $nomGrade;
    

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

    /**
     * Get the value of nomGrade
     */ 
    public function getNomGrade()
    {
        return $this->nomGrade;
    }

    /**
     * Set the value of nomGrade
     *
     * @return  self
     */ 
    public function setNomGrade($nomGrade)
    {
        $this->nomGrade = $nomGrade;

        return $this;
    }
}


?>