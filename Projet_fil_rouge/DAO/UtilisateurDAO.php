<?php

include_once('BDDConnexionDAO.php');
include_once('../MODEL/Utilisateur.php');



class UtilisateurDAO extends BDDConnexionDAO {
    
    

    public function selectAll(){

        $mysqli=$this->connectionBdd();
        $stmt = $mysqli -> prepare("select * from utilisateur as a inner join compte_utilisateur as b on a.email = b.email");
        $stmt->execute();
        $rs = $stmt -> get_result();
        $data = $rs -> fetch_all(MYSQLI_BOTH);
        return $data;

    }

    public function selectWhereEgale($compar){

        $mysqli=$this->connectionBdd();
        $str=$compar;
        $stmt = $mysqli -> prepare("select * from utilisateur  where email=?");
        $stmt -> bind_param("s",$str);
        $stmt->execute();
        $rs = $stmt -> get_result();
        $data = $rs -> fetch_all(MYSQLI_BOTH);
        return $data;

    }

    function add($Ajout){
        
        $mysqli=$this->connectionBdd();
        
        $nomUser        =$Ajout -> getNomUtilisateur();
        $prenomUser     =$Ajout -> getPrenomUtilisateur(); 
        $adresseUser    =$Ajout -> getAdresseUtilisateur(); 
        $codePostalUser =$Ajout -> getCodePostalUtilisateur(); 
        $villeUser      =$Ajout -> getVilleUtilisateur(); 
        $telUser        =$Ajout -> getTelephoneUtilisateur(); 
        $email          =$Ajout -> getEmail(); 
        $motDePasse     =$Ajout -> getMotDePasse(); 
        
        $stmt = $mysqli -> prepare("INSERT into utilisateur (nom_utilisateur,prenom_utilisateur,adresse_utilisateur,code_postal_utilisateur,ville_utilisateur,telephone_utilisateur,email,mot_de_passe,nom_role) 
                                    values(?,?,?,?,?,?,?,?,'Membre');") ;/*echo $mysqli -> error;die ;*/
        $stmt -> bind_param("sssissss",$nomUser,$prenomUser,$adresseUser,$codePostalUser,$villeUser,$telUser,$email,$motDePasse); 

        $stmt->execute();
       
       
    
    }
    
    function edit($Edit){

        $mysqli=$this->connectionBdd();
        
        $iduser         =$Edit -> getIdUtilisateur();
        $nomUser        =$Edit -> getNomUtilisateur();
        $prenomUser     =$Edit -> getPrenomUtilisateur(); 
        $adresseUser    =$Edit -> getAdresseUtilisateur(); 
        $codePostalUser =$Edit -> getCodePostalUtilisateur(); 
        $villeUser      =$Edit -> getVilleUtilisateur(); 
        $telUser        =$Edit -> getTelephoneUtilisateur(); 
        $email          =$Edit -> getEmail(); 
        $motDePasse     =$Edit -> getMotDePasse(); 

        $stmt = $mysqli -> prepare("update utilisateur set nom_utilisateur=?, prenom_utilisateur=?, adresse_utilisateur=? , code_postal_utilisateur=?, ville_utilisateur=?, telephone_utilisateur=?, email=?, mot_de_passe=? where id_utilisateur=?") ;/*echo $mysqli -> error;die ;*/
        $stmt -> bind_param("sssissssi",$nomUser,$prenomUser,$adresseUser,$codePostalUser,$villeUser,$telUser,$email,$motDePasse,$iduser);    
        $stmt->execute(); 
        

    }

    /*function del($del){
        
        $mysqli=$this->connectionBdd();
        $stmt = $mysqli -> prepare("delete from utilisateur where username=?") ;/*echo $mysqli -> error;die ;*/
        /*$stmt -> bind_param("s",$del);    
        $stmt->execute();
    
    }

    public function userDisconnect(){
        
        session_start(); 
        session_destroy();

        
    }*/
    

}