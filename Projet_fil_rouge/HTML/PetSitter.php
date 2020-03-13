<?php
include_once('..\SERVICE\ServicePetSitter.php');
include_once('..\DAO\PetSitterDAO.php');
?>


<!DOCTYPE html>
	<html>
		<head>
			<meta charset=``utf-8`` />
            <title>Pet'sitter</title>
            <link rel="stylesheet" href="../css/bootstrap.css"/>
            <link rel="stylesheet" href="../css/style.css"/>
            
            <link rel="icon" href="../img/patteblanche.png">
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>
    <body>
      <!-- header       -->
     
      <!-- fin header       -->
      <div class="container text-center">
        <div class="row mt-3">     
          <div class="col-sm-12 justify-content-center ">
          <div class="col-sm-6 offset-sm-3 aside-adopt  mt-4 d-none d-sm-block d-md-block d-lg-none d-xl-none ">
            <div class="row bloc-aside justify-content-center ">
             
             <!-- formulaire qui apparait en col12 en sm      -->
              <form class="was-validated">
                <div class="form-group row mt-2 justify-content-center ">
                    <label for="inputname" class="col-sm-3 col-form-label">Lieu</label>
                    <input type="text" class="col-sm-10 form-control is-valid" id="inputname" required>
                </div>
                <div class="form-group row  justify-content-center ">
                  <label for="inputname" class="col-sm-3 col-form-label">Espece</label>
                  <input type="text" class="col-sm-10 form-control is-valid" id="inputname" required>
                </div>
                <div class="form-group row mt-2 justify-content-center ">
                  <label  class="col-sm-6 col-form-label">Type de garde</label>
                </div>
                <div class="form-check row text-left">
                  <label class="form-check-label col-8" for="exampleRadios1">
                    Chez le maitre
                  </label>
                  <input class="form-check-input col-1" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                </div>
               
                <div class="form-check row text-left mt-2 mb-4">
                  <label class="form-check-label col-8" for="exampleRadios1">
                    Chez le Pet'sitter
                  </label>
                  <input class="form-check-input col-1" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
                </div>
            </form>
            </div>
          </div>
        </div>
        <!-- clac annonces      -->
          <div class="col-lg-8 aff-article m-sm-4">
            <div class="row justify-content-center">
              <div class="col-lg-6 ">
                <a class="btn btn-admin mt-3" href="FormPetSitter.php">Créer une annonce</a></button>
              </div>
            </div>

 <!-- Affichage annonce -->
 <?php

/* Ajout d'une annonce */
if(isset($_POST["valider"])&& $_GET['action']=='ajout') {
    $servicePetSitter = new ServicePetsitter;
    $servicePetSitter -> ajoutPetsitter($_POST);
}

/* Suppression d'une annonce */
if (isset($_GET['action'])&& $_GET['action']='del' && isset($_GET['id_pet_sitter'])){
  $serviceEmp = new PetSitterDAO;
  $serviceEmp -> deleteAnnonce($_GET['id_pet_sitter']);
} 

/* Modification des employes */
if(isset($_POST["modif"])){
  $serviceEmp = new ServicePetsitter;
  $serviceEmp -> modify($_POST); 
}

$db = mysqli_init();
mysqli_real_connect($db, 'localhost','root','','companimal');
$rs=mysqli_query($db, "SELECT * FROM pet_sitter");
$data=mysqli_fetch_all($rs,MYSQLI_ASSOC);
$i=0 ; 


for($i=0; $i<=count($data)-1; $i++){
  
echo"      <div class='row justify-content-center mt-3 mb-3'>   ";
echo"           <div class='col-lg-7 mt-3 mb-3'>";
echo"             <h4>".$data[$i]['titre_pet_sitter']."</h4>";
echo"           </div> ";
echo"      <div class='col-lg-6 col-sm-10 text-left par-article '>  ";
echo"             <p>".$data[$i]['description_pet_sitter']."</p> ";
echo"      </div> ";
echo"      <div class='col-lg-5 col-sm-12 align-self-center'> ";
echo'            <img  width="280px" src="../img/LogoV3png.png" />';

/* echo '            <img  width="290" src="data:image/;base64,'.base64_encode( $data[$i]['photo_pet_sitter'] ).'"/>'; */

/* Bouton consulter annonce */
echo '        <form action="FichePetSitter.php" method="post">';
echo '          <input Class="btn mb-2 mt-2" type="submit" value="Consulter l\'annonce"> ' ;                                                       
echo '          <input type="hidden" name="consulter" value="'.$data[$i]['id_pet_sitter'].'">';
echo '        </form>';

/* Bouton modifier annonce */
echo '        <form action="FormPetSitterModification.php" method="post">';
echo '            <input Class="btn btn-primary" type="submit" value="modifier"> ' ;                                                       
echo '             <input type="hidden" name="modifier" value="'.$data[$i]['id_pet_sitter'].'">';
/* Bouton supprilmer annonce */
echo '<a value="del" class="btn btn-danger"  href="PetSitter.php?action=del&id_pet_sitter='.$data[$i]['id_pet_sitter'].'" style="color:white; text-decoration:none;">Supprimer</a></div>';
echo '</form>'; 



/*
echo '        <form action="FormPetSitterModification.php" method="post">';
echo '          <input Class="" type="submit" value="modifier"> ' ;                                                       
echo '         <input Class="" type="hidden" name="modifier" value="'.$data[$i]['id_pet_sitter'].'">';
echo '        </form>'; 
echo '    </div>';
echo'     <a value="del" class="btn btn-danger col-lg-5 col-sm-5"  href="PetSitter.php?action=del&id_pet_sitter='.$data[$i]['id_pet_sitter'].'" style="color:white; text-decoration:none;">Supprimer</a>';
*/       
echo"         </div> ";


}
  
?>  

            <!-- pagination -->
            <div class="row justify-content-center">
              <nav aria-label="Page navigation example" class="mt-3">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          
          <!-- formulaire aside qui apparait en lg     -->
          <div class="col-lg-3 aside-adopt ml-lg-3 mt-4 d-none d-lg-block">
            <div class="row bloc-aside justify-content-center ">
              <form class="was-validated">
                <div class="form-group row mt-2 justify-content-center ">
                    <label for="inputname" class="col-sm-3 col-form-label">Lieu</label>
                    <input type="text" class="col-sm-10 form-control is-valid" id="inputname" required>
                </div>
                <div class="form-group row  justify-content-center ">
                  <label for="inputname" class="col-sm-3 col-form-label">Espece</label>
                  <input type="text" class="col-sm-10 form-control is-valid" id="inputname" required>
                </div>
                <div class="form-group row mt-2 justify-content-center ">
                  <label  class="col-sm-6 col-form-label">Type de garde</label>
                </div>
                <div class="form-check row text-left">
                  <label class="form-check-label col-8" for="exampleRadios1">
                    Chez le maitre
                  </label>
                  <input class="form-check-input col-1" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                </div>
               
                <div class="form-check row text-left mt-2 mb-4">
                  <label class="form-check-label col-8" for="exampleRadios1">
                    Chez le Pet'sitter
                  </label>
                  <input class="form-check-input col-1" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
                </div>
            </form>
            </div>
          </div>
        </div>
    </div>

      <!-- footer       -->
     
     <!-- fin footer       -->
		</body>
	</html>
