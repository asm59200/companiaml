<!DOCTYPE html>
<html>
<head>

            <title>Formulaire Pet'Sitter</title>
            <link rel="stylesheet" href="../css/bootstrap.css"/>
            <link rel="stylesheet" href="../css/style.css"/>
           
            <link rel="icon" href="../img/patteblanche.png">
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>



<?php 
 $db = mysqli_init();
 mysqli_real_connect($db, 'localhost',"root","","companimal");
 $id = $_POST['modifier'];
 
 $ligne = mysqli_query($db,"SELECT * FROM pet_sitter WHERE id_pet_sitter=$id");
 $data = mysqli_fetch_all($ligne,MYSQLI_BOTH);
 ?>   



  <body>
    <!-- Début body Pet Sitter-->
    <div class="Background-Form">
        <div class="container-fluid">
            <!-- Titre Pet'Sitter-->
            <div>
                <div class="row">
                  <div class="col-lg-2 offset-lg-5 ">
                  <h1 class="Titre">Pet'Sitter</h1>
                  </div>
                </div>
              </div>
            <!-- Fin Titre Pet'Sitter-->


            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <!-- Formulaire Pet'Sitter -->
                    <form method="post"  action="PetSitter.php?action=<?php echo $data[0][0]  ?>">
                        <!-- Nom de l'annonce-->                        
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <label for="NomAnnonceFormPetSitter" class="col-lg-3 col-form-label">Titre de l'annonce</label>
                            <div class="col-lg-4 col-6">
                              <input type="text" class="form-control"  value="<?php if(isset($_POST["modifier"]))
                                    {
                                        echo $data[0][1];
                                    } ?>"
                                 name="NomAnnonceFormPetSitter">
                            </div>
                        </div>                        
                        <!-- Lieu -->
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <label for="CodePostalLieuPetSitter" class="col-lg-3 col-form-label">Code Postal :</label>
                            <div class="col-lg-4 col-6">
                              <input type="number" class="form-control" value="<?php if(isset($_POST["modifier"])){
                                        echo $data[0][2];                                   
                                    } ?>" name="CodePostalPetSitter">
                            </div>
                        </div>
                        <!-- Type de Garde-->
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <label for="GardePetSitter" class="col-lg-3 col-form-label">Type de Garde</label>
                            <div class="col-lg-4 col-6">

<?php if(isset($_POST['modifier'])){
                    if($data[0][3] == "Chez moi"){
            echo"            <div class='form-check form-check-inline'>";
            echo"            <input class='form-check-input' type='radio' name='Garde' id='inlineRadio1' value='Chez moi' checked required>";
            echo"            <label class='form-check-label' for='ChezMoi'>Chez moi</label>";
            echo"          </div>";
                    }else{
            echo"            <div class='form-check form-check-inline'>";
            echo"            <input class='form-check-input' type='radio' name='Garde' id='inlineRadio1' value='Chez moi' required>";
            echo"            <label class='form-check-label' for='ChezMoi'>Chez moi</label>";
            echo"          </div>";            
                    } 
                    
                    if($data[0][3] == "Chez vous"){
            echo"            <div class='form-check form-check-inline'>";
            echo"            <input class='form-check-input' type='radio' name='Garde' id='inlineRadio1' value='Chez vous' checked required>";
            echo"            <label class='form-check-label' for='Chez vous'>Chez vous</label>";
            echo"          </div>";
                    }else{
            echo"            <div class='form-check form-check-inline'>";
            echo"            <input class='form-check-input' type='radio' name='Garde' id='inlineRadio1' value='Chez vous' required>";
            echo"            <label class='form-check-label' for='Chez vous'>Chez vous</label>";
            echo"          </div>";            
                    } 
                    
                    if($data[0][3] == ""){
            echo"            <div class='form-check form-check-inline'>";
            echo"            <input class='form-check-input' type='radio' name='Garde' id='inlineRadio1' value='Promenade' checked required>";
            echo"            <label class='form-check-label' for='Promenade'>Promenade</label>";
            echo"          </div>";
                    }else{
            echo"            <div class='form-check form-check-inline'>";
            echo"            <input class='form-check-input' type='radio' name='Garde' id='inlineRadio1' value='Promenade' required>";
            echo"            <label class='form-check-label' for='Promenade'>Promenade</label>";
            echo"          </div>";            
                    }    
        } 
        
?>
                                </div>
                        </div>
                        <!-- Type de domicile -->
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <label for="DomicilePetSitter" class="col-lg-3 col-form-label">Type de Domicile</label>
                            <div class="col-lg-4 col-6">
<?php                            if(isset($_POST["modifier"])){

                    if($data[0][4] == "Maison"){
            echo"            <div class='form-check form-check-inline'>";
            echo"            <input class='form-check-input' type='radio' name='Domicile' id='inlineRadio1' value='Maison' checked required>";
            echo"            <label class='form-check-label' for='Maison'>Maison</label>";
            echo"          </div>";
                    }else{
            echo"            <div class='form-check form-check-inline'>";
            echo"            <input class='form-check-input' type='radio' name='Domicile' id='inlineRadio1' value='Maison' required>";
            echo"            <label class='form-check-label' for='Maison'>Maison</label>";
            echo"          </div>";            
                    } 

                    if($data[0][4] == "Appartement"){
            echo"            <div class='form-check form-check-inline'>";
            echo"            <input class='form-check-input' type='radio' name='Domicile' id='inlineRadio1' value='Appartement' checked required>";
            echo"            <label class='form-check-label' for='Appartement'>Appartement</label>";
            echo"          </div>";
                    }else{
            echo"            <div class='form-check form-check-inline'>";
            echo"            <input class='form-check-input' type='radio' name='Domicile' id='inlineRadio1' value='Appartement' required>";
            echo"            <label class='form-check-label' for='Appartement'>Appartement</label>";
            echo"          </div>";            
                    } 
                }
?>                
                            </div>
                        </div>
                        <!--Télécharger une photo-->
                        <input class='form-check-input' type='hidden' name='idpet' id='inlineRadio1' value='<?php echo $data[0][0];?>'>
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <label class="col-lg-3 col-form-label">Télécharger une Photo :</label>
                            
                            <div class="col-lg-4 col-6">
                                <input type="file" class="form-control-file" name="DowloadPhotoPetSitter">
                            </div>
                            
                        </div>  
                                                
                        <!-- Esepece Animal Gardé-->
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <label for="EspecePetSitter" class="col-lg-3 col-form-label">Espéce d'Animal Gardé:</label>
                            <div class="col-lg-4 col-6">
                                <select class="form-control" name="EspecePetSitter">
                                    <option>Chien</option>
                                    <option>Chat</option>
                                    <option>Crocodile</option>
                                </select>
                            </div>
                        </div>
                        <!-- Information Complémentaire-->
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <label for="InfoCompPetSitter" class="col-lg-3 col-form-label">Information Complémentaire</label>
                            <div class="col-lg-4 col-6">
                            <textarea row="6" class="form-control" name="InfoCompPetSitter"><?php 
                                if(isset($_POST["modifier"]))
                                    {
                                        echo $data[0][6];
                                        
                                    }  ?></textarea>
                            </div>
                        </div>
                        <!-- Bouton envoie Formulaire Pet'sitter-->
                        <div class="row">
                            <div class="col-lg-6"></div>
                            <div class="col-lg-2">
                                <button type="submit" name="modif" class="btn">Valider</button>
                            </div>
                        </div>   
                    </form>
                    <!-- Fin Formulaire-->
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Body Pet'Sitter-->
</body>
</html>