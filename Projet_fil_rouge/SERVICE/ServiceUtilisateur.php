<?php

include_once('../MODEL/Utilisateur.php');
include_once('../DAO/UtilisateurDAO.php');


class ServiceUtilisateur {

      

    public function ajoutUser($tab){

        $User     = new Utilisateur();
        
        $UserDAO = new UtilisateurDAO();

        
        
        $User  -> setNomUtilisateur($tab['nom']);
        $User  -> setPrenomUtilisateur($tab['prenom']); 
        $User  -> setAdresseUtilisateur($tab['adresse']); 
        $User  -> setCodePostalUtilisateur($tab['codePostal']); 
        $User  -> setVilleUtilisateur($tab['ville']); 
        $User  -> setTelephoneUtilisateur($tab['tel']); 
        $User  -> setEmail($tab['email']); 
        $User  -> setMotDePasse(password_hash($tab['motDePasse'], PASSWORD_DEFAULT));
        
        $data = $UserDAO-> selectWhereEgale($tab['email']);
        if(count($data)>0){
           return "false"; 
        }else if($tab['motDePasse']!=$tab['motDePasse2']){
            return "false2";
        }
        
        $UserDAO -> add($User);

    }
    
    public function modifUser($tab){

        $User     = new Utilisateur();
        $UserDAO = new UtilisateurDAO();

        $User  -> setIDUtilisateur($tab['idUser']);
        $User  -> setNomUtilisateur($tab['nom']);
        $User  -> setPrenomUtilisateur($tab['prenom']); 
        $User  -> setAdresseUtilisateur($tab['adresse']); 
        $User  -> setCodePostalUtilisateur($tab['codePostal']); 
        $User  -> setVilleUtilisateur($tab['ville']); 
        $User  -> setTelephoneUtilisateur($tab['tel']); 
        $User  -> setEmail($tab['email']); 
        $User  -> setMotDePasse(password_hash($tab['motDePasse'], PASSWORD_DEFAULT));
        
        
        $UserDAO -> edit($User);


    }

    public function suppUser($tab){

        $this ->dao -> del($tab["usernameDel"]);

    }

    public function connexion($tab){

        $UserDAO = new UtilisateurDAO();
        $password = $tab['motDePasse'];
        $tabnc = $UserDAO -> selectWhereEgale($tab['email']);
        $temp = $tabnc[0]['mot_de_passe'];
        
        if(password_verify($password,$temp)){
            $_SESSION['iduser'] = $tabnc[0]['id_utilisateur'];
            $_SESSION['role'] = $tabnc[0]['nom_role'];
            $_SESSION['email'] = $tabnc[0]['email']; 
            $_SESSION['telephone'] = $tabnc[0]['telephone_utilisateur']; 
            $_SESSION['nom'] = $tabnc[0]['nom_utilisateur'];
            $_SESSION['prenom'] = $tabnc[0]['prenom_utilisateur'];
            return "true";
            
        }
    }   
    




}

?>