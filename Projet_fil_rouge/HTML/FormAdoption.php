<!DOCTYPE html>
<html>
<head>

    <title>Formulaire d'Adoption</title>
    <link rel="stylesheet" href="../css/bootstrap.css"/>
    <link rel="stylesheet" href="../css/style.css"/>
           
    <link rel="icon" href="../img/patteblanche.png">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
            
  <body>
    <!-- Debut Body Formulaire Adoption-->
    <div class="Background-Form">
        <div class="container-fluid">
            <!-- Titre Form Adoption-->
            <div>
                <div class="row">
                  <div class="col-lg-2 offset-lg-5 ">
                  <h1 class="Titre">Adoption</h1>
                  </div>
                </div>
              </div>

            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <!-- Formulaire d'Adoption-->
                    <form method="POST" >
                        <div class="form-group row">
                            <!--Nom de l'animal-->
                            <div class="col-lg-3"></div>
                            <label for="FormAdoptionNomAnimal" class="col-lg-2 col-form-label">Nom de l'Animal :</label>
                            <div class="col-lg-4 col-6 ">
                              <input type="text" class="form-control" id="FormAdoptionNomAnimal">
                            </div>
                        </div>
                        <!-- Espece-->
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <label for="FormAdoptionEspeceAnimal" class="col-lg-2 col-form-label">Espéce :</label>
                            <div class="col-lg-4 col-3">
                                <select class="form-control" id="FormAdoptionEspeceAnimal">
                                    <option>Chien</option>
                                    <option>Chat</option>
                                    <option>Lapin</option>
                                    <option>Oiseaux</option>
                                    <option>Autre</option>
                                </select>
                            </div>
                        </div>
                        <!-- Race-->
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <label for="FormAdoptionRaceAnimal" class="col-lg-2 col-form-label">Race :</label>
                            <div class="col-lg-3 col-3">
                                <select class="form-control" id="FormAdoptionRaceAnimal">
                                    <option>Autre</option>
                                </select>
                            </div>
                        </div>  
                        <!-- Dowload Photo-->
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <label for="FormAdoptionDowloadPhoto" class="col-lg-2 col-form-label">Télécharger une Photo :</label>
                            <div class="col-lg-6 col-8">
                                <input type="file" class="form-control-file" id="FormAdoptionDowloadPhoto">
                            </div>
                        </div>
                        <!--  Sexe -->
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <label for="FormAdoptionSexeAnimal" class="col-lg-2 col-form-label">Sexe :</label>
                            <div class="col-lg-6 col-8">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Male" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="Male">Male</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Femelle" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="Femelle">Femelle</label>
                                  </div>
                            </div>
                        </div>
                        <!-- Age Animal-->
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <label for="FormAdoptionAgeAnimal" class="col-lg-2 col-form-label">Age :</label>
                            <div class="col-lg-3 col-3">
                              <input type="text" class="form-control" id="FormAdoptionAgeAnimal">
                            </div>
                        </div>
                        <!--Refuge-->
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <label for="FormAdoptionRefugeAnimal" class="col-lg-2 col-form-label">Refuge :</label>
                            <div class="col-lg-6 col-8">
                              <input type="text" class="form-control" id="FormAdoptionRefugeAnimal">
                            </div>
                        </div>
                        <!-- Description-->
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <label for="FormAdoptionDescription" class="col-lg-2 col-form-label">Description :</label>
                            <div class="col-lg-6 col-10">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                        </div>
                        <!-- Bouton d'envoi-->
                        <div class="row">
                            <div class="col-lg-5"></div>
                            <div class="col-lg-1">
                                <button type="submit" class="btn">Valider</button>
                            </div>
                        <!-- Bouton Retour Adoption -->
                            <div class="col-lg-1">
                                <a href="http://localhost/ProjetDWWM/HTML/Adoption.php">
                                    <button type="button" class="btn">Retour</button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Body Formulaire d'Adoption-->
</body>
</html>