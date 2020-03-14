<?php
include_once ('../SERVICE\ServicePetSitter.php');
include_once ('../MODEL\PetSitter.php');
include_once ('../DAO\BDDConnexionDAO.php');

Class PetSitterDAO{

    Public function ajoutAnnoncePetSitter($data){
            session_start();
            $mysqli = new mysqli('localhost',"root","","companimal");
            $iduser = $_SESSION['iduser'];           
            $titrePetSitter = $data -> getTitrePetSitter();
            $distance = $data -> getDistancePetSitter();
            $garde = $data -> getTypeGardePetSitter();
            $domicile = $data -> getTypeDomicilePetSitter();
            $afftel = $data -> getPresentationTelephone();
            $photo = $data -> getDowloadPhotoPetSitter();
            $description = $data -> getDescriptionPetSitter();
            $idEspece = $data -> getIdEspece();
            $stmt = $mysqli->prepare('INSERT INTO pet_sitter(titre_pet_sitter,distance_pet_sitter,type_garde_pet_sitter,type_domicile_pet_sitter,presentation_telephone,description_pet_sitter,id_utilisateur,photo_pet_sitter,nom_espece) 
            VALUES (?, ?, ?, ?,?, ?, ?, ?, ?)');
            $stmt -> bind_param("sissssiss",$titrePetSitter,$distance,$garde,$domicile,$afftel,$description,$iduser,$photo,$idEspece);
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
            $afftel = $data -> getPresentationTelephone();
            $photo = $data -> getDowloadPhotoPetSitter();
            $description = $data -> getDescriptionPetSitter();
            $idEspece = $data -> getIdEspece();
            $stmt = $mysqli->prepare('UPDATE pet_sitter SET titre_pet_sitter=? , distance_pet_sitter=? ,type_garde_pet_sitter=? ,type_domicile_pet_sitter=? ,description_pet_sitter=? ,photo_pet_sitter=? , nom_espece=? WHERE id_pet_sitter = ?');/* echo $mysqli -> error;die ;*/
            $stmt -> bind_param("sissssss",$titrePetSitter,$distance,$garde,$domicile,$description,$photo,$idEspece,$idpet);
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