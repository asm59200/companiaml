<?php
include_once ('..\DAO\PetSitterDAO.php');
include_once ('..\MODEL\PetSitter.php');
include_once ('..\DAO\BDDConnexionDAO.php');

Class ServicePetsitter extends BDDConnexionDAO{


            Public function ajoutPetsitter($data)
            {
                $petSitterDAO = new PetSitterDAO();
                $petsitter = new PetSitter();
                $petsitter-> setTitrePetSitter($data['NomAnnonceFormPetSitter']);
                $petsitter-> setDistancePetSitter($data['CodePostalPetSitter']);
                $petsitter-> setTypeGardePetSitter($data['Garde']);
                $petsitter-> setTypeDomicilePetSitter($data['Domicile']);
                $petsitter-> setPresentationTelephone($data['afftel']);
                $petsitter -> setDowloadPhotoPetSitter($data['DowloadPhotoPetSitter']);
                $petsitter-> setDescriptionPetSitter($data['InfoCompPetSitter']);
                $petsitter-> setIdEspece($data['EspecePetSitter']);
                $petSitterDAO-> ajoutAnnoncePetSitter($petsitter);

            }

            public function modify($data){

                $petSitterDAO=new PetSitterDAO();
                $petsitter=new PetSitter();
                $petsitter -> setIdPetSitter($data['idpet']);
                $petsitter-> setTitrePetSitter($data['NomAnnonceFormPetSitter']);
                $petsitter-> setDistancePetSitter($data['CodePostalPetSitter']);
                $petsitter-> setTypeGardePetSitter($data['Garde']);
                $petsitter-> setTypeDomicilePetSitter($data['Domicile']);
                $petsitter-> setPresentationTelephone($data['afftel']);
                $petsitter -> setDowloadPhotoPetSitter($data['DowloadPhotoPetSitter']);
                $petsitter-> setDescriptionPetSitter($data['InfoCompPetSitter']);
                $petsitter-> setIdEspece($data['EspecePetSitter']);
                $petSitterDAO-> modifyAnnonce($petsitter);
                
            }


}

?>