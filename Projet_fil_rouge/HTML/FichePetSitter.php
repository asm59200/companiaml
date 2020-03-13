<?php
include_once ('..\SERVICE\ServicePetSitter.php');
include_once ('..\DAO\BDDConnexionDAO.php');

?>


<!DOCTYPE html>
	<html>
		<head>
			<meta charset=``utf-8`` />
            <title>Fiche Pet'Sitter</title>
            <link rel="stylesheet" href="../css/bootstrap.css"/>
            <link rel="stylesheet" href="../css/style.css"/>
           
            <link rel="icon" href="../img/patteblanche.png">
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        </head>
<body>


<?php 
 $db = mysqli_init();
 mysqli_real_connect($db, 'localhost',"root","","companimal");
 $id = $_POST['consulter'];
 $ligne = mysqli_query($db,"SELECT * FROM pet_sitter WHERE id_pet_sitter="."'$id'");
 $data = mysqli_fetch_all($ligne,MYSQLI_BOTH);
 $Utilisateur = mysqli_query($db,"SELECT * FROM utilisateur AS A join pet_sitter as B on A.id_utilisateur=B.id_utilisateur ");
 $Utili = mysqli_fetch_all($Utilisateur,MYSQLI_BOTH);
 
 ?>   



  <!-- Debut Body Fiche Pet Sitter-->
    <div class="Fiche">
        <div class="container-fluid">
          <!-- Background Blanc-->
            <div class="row">
              <div class="col-10 offset-1">
                <div class="Background-Color-Fiche-Blanc">
          <!-- Image Fiche Animal-->      
                  <div class="Background-Color-Fiche-Image">
                    <img class="Image-Fiche" src="../img/carousel_2.jpg">
                  </div>
          <!-- Texte Fiche Animal-->
                  <div class="Background-Color-Fiche-Texte">
                      <h3 style="text-align:center; padding-top: 20px;"><?php if(isset($_POST["consulter"])){
                                        echo $data[0][1];
                                        
                                    }  ?></h3>
                    <div class="row">
                      <div class="col-lg-12 offset-lg-1 black col-10 offset-1">
                        <p><a class="text-dark"> Nom / Prénom :</a>  <?php if(isset($_POST["consulter"])){
                                        echo "  ";
                                        echo $Utili[0][1];
                                        echo "  ";                     
                                        echo $Utili[0][2];                                        
                                    }  ?> </p> 
                        <p><a class="text-dark"> Code Postal : </a><?php if(isset($_POST["consulter"])){
                                        echo "  ";
                                        echo $data[0][2];                                   
                                    }  ?>  </p>
                        <p><a class="text-dark"> Type de Garde : </a><?php if(isset($_POST["consulter"])){
                                        echo "  ";
                                        echo $data[0][3];                                   
                                    }  ?> </p>
                        <p><a class="text-dark"> Type de Domicile : </a><?php if(isset($_POST["consulter"])){
                                        echo "  ";
                                        echo $data[0][4];                                   
                                    }  ?> </p>
                        <p><a class="text-dark"> Type d'Animal Gardé : </a><?php if(isset($_POST["consulter"])){
                                        echo "  ";
                                        echo $data[0][8];                                   
                                    }  ?> </p>
                      </div>
                    </div>
                    <p style="text-align: center"><a class="text-dark"> Information Complémentaire : </a></p>
                    <div class="row">
                      <div class="col-lg-8 offset-lg-2 col-10 offset-1 Commentaire-Box ">
                        <p><?php if(isset($_POST["consulter"])){
                                        echo $data[0][6];
                                        
                                    }  ?></p>
                      </div>
                    </div>
                  </div>

        <!-- Bouton Admin Modification/Suppresion-->
                  <div class="row mr-2 justify-content-end">
                    <form action="FormPetSitterModification.php" method="post">
                        <input Class="btn mt-2 mr-2 btn-primary" type="submit" value="modifier">
                        <input type="hidden" name="modifier" value="<?php echo $_POST['consulter']?> ">                    
                    </form>
                    <form action="PetSitter.php?action=del&id_pet_sitter=<?php echo $data[0][0]?>" method="post">
                        <input value="Supprimer" type="submit" class="btn mt-2 mr-2 btn-danger" style="color:white; text-decoration:none;">
                    </form>
                  </div>

        <!-- Bouton Contactez-Nous/information du Refuge-->
        <div class=" row justify-content-center">
          <button type="button" class="btn btn-lg Bouton-Admin-2">Contactez-Moi </button>
          <a class="btn-lg text-light Bouton-Admin-2">Tel : <?php if(isset($_POST["consulter"])){
                                        echo "  ";
                                        echo $Utili[0][6];                                   
                                    }  ?>  </a>
        </div>

                </div>
              </div>
            </div>
        </div>
    </div>
  <!-- Fin Body Fiche Pet'Sitter-->    

</body>
</html>
