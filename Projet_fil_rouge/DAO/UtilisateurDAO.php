<?php

include_once('../DAO/BDDConnexionDAO.php');
include_once('../MODEL/Utilisateur.php');
include_once('../MODEL/Role.php');

class UtilisateurDAO extends BDDConnexionDAO{
   
    public function selectNomColUser(){
        
        $db=$this->connectionBdd();
        $nc = mysqli_query($db, "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'utilisateur'");
        $tabnc = mysqli_fetch_all($nc,MYSQLI_ASSOC);
        return $tabnc;

    }

    public function selectAllUser(){

        $db=$this->connectionBdd();
        $rs=mysqli_query($db, 'select * from utilisateur');
        $data=mysqli_fetch_all($rs,MYSQLI_BOTH);
        return $data;

    }

    public function selectUserWhereIDEgale($comparUser){

        $db=$this->connectionBdd();
        $rs=mysqli_query($db, "select * from utilisateur where idUtilisateur='$comparUser'");
        $data=mysqli_fetch_all($rs,MYSQLI_BOTH);
        return $data;

    }

    function inscrire($utilisateur,$role,$compteUtilisateur){
        
        $db=$this->connectionBdd();

        $idUtilisateur          =$utilisateur -> getIdUtilisateur();
        $nomUtilisateur         =$utilisateur -> getNomUtilisateur();
        $prenomUtilisateur      =$utilisateur -> getPrenomUtilisateur();
        $adresseUtilisateur     =$utilisateur -> getAdresseUtilisateur();
        $codePostalUtilisateur  =$utilisateur -> getCodePostalUtilisateur();
        $villeUtilisateur       =$utilisateur -> getVilleUtilisateur();
        $telephoneUtilisateur   =$utilisateur -> getTelephoneUtilisateur();
        $email                  =$utilisateur -> getEmail();
        $idRole                 =$utilisateur -> getIdRole();
        
        $query="insert into utilisateur (id_user,username,password,role) values(NULL,'$username1','$password1','$role1')" ;     
        $inscript      =mysqli_query($db,$query ); 
    
    }

}