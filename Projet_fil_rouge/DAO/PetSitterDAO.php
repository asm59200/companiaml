<?php
include_once ('C:\xampp\htdocs\Exercices\Projet_fil_rouge\SERVICE\ServicePetSitter.php');
include_once ('C:\xampp\htdocs\Exercices\Projet_fil_rouge\MODEL\PetSitter.php');
include_once ('C:\xampp\htdocs\Exercices\Projet_fil_rouge\DAO\BDDConnexionDAO.php');

Class PetSitterDAO{

    Public function ajoutAnnoncePetSitter($data){
        
            $mysqli = new mysqli('localhost',"root","","companimal");           
            $titrePetSitter = $data -> getTitrePetSitter();
            $distance = $data -> getDistancePetSitter();
            $garde = $data -> getTypeGardePetSitter();
            $domicile = $data -> getTypeDomicilePetSitter();
            $photo = $data -> getDowloadPhotoPetSitter();
            $description = $data -> getDescriptionPetSitter();
            $stmt = $mysqli->prepare('INSERT INTO pet_sitter(titre_pet_sitter,distance_pet_sitter,type_garde_pet_sitter,type_domicile_pet_sitter,presentation_telephone,description_pet_sitter,id_utilisateur,nom_espece,photo_pet_sitter) 
            VALUES (?, ?, ?, ?,0600000000, ?, 3,"Chien",?)');
            $stmt -> bind_param("sissss",$titrePetSitter,$distance,$garde,$domicile,$description,$photo);
            $stmt -> execute();
            
        }
       
    

        public function modifyAnnonce($data)
        {
            $mysqli = new mysqli('localhost',"root","","companimal"); 
            $idpet = $data -> getIdPetSitter();          
            $titrePetSitter = $data -> getTitrePetSitter();
            $distance = $data -> getDistancePetSitter();
            $garde = $data -> getTypeGardePetSitter();
            $domicile = $data -> getTypeDomicilePetSitter();
            $photo = $data -> getDowloadPhotoPetSitter();
            $description = $data -> getDescriptionPetSitter();
            $stmt = $mysqli->prepare('UPDATE pet_sitter SET titre_pet_sitter=? , distance_pet_sitter=? ,type_garde_pet_sitter=? ,type_domicile_pet_sitter=? ,description_pet_sitter=?   ,photo_pet_sitter=? WHERE id_pet_sitter = ?');/* echo $mysqli -> error;die ;*/
            $stmt -> bind_param("sissssi",$titrePetSitter,$distance,$garde,$domicile,$description,$photo,$idpet);
            $stmt -> execute();
        }







    public function deleteAnnonce($data)
        {
            $mysqli = new mysqli('localhost',"root","","companimal");  
            $stmt = $mysqli->prepare("DELETE FROM pet_sitter WHERE id_pet_sitter =?");
            $stmt -> bind_param("i",$data);
            $stmt -> execute();
        }

}


?>