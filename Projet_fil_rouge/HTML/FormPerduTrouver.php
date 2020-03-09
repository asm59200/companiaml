<!DOCTYPE html>
	<html>
		<head>
			<meta charset=``utf-8`` />
            <title>Formulaire Perdu Trouver</title>
            <link rel="stylesheet" href="../css/bootstrap.css"/>
            <link rel="stylesheet" href="../css/style.css"/>
           
            <link rel="icon" href="../img/patteblanche.png">
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>
    <body>
        <!-- Debut Body Formulaire Perdu Trouver-->
       <div class="Background-Form">
        <div class="container-fluid">
            <!-- Titre Formulaire Perdu Trouver-->
            <div>
                <div class="row">
                  <div class="col-lg-2 offset-lg-5 ">
                  <h1 class="Titre">Perdu/Trouver</h1>
                  </div>
                </div>
              </div>



            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <!-- Formulaire-->
                    <form>
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <!-- Tyoe d'Annonce-->
                            <label for="TypeAnnoncePerduTrouver" class="col-lg-2 col-form-label">Type d'Annonce</label>
                            <div class="col-lg-4 col-6">
                                <!-- Radio Perdu Trouver-->
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="Perdu">Perdu</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="Trouver">Trouver</label>
                                  </div>
                            </div>
                        </div>
                        <!-- Nom de l'annonce-->
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <label for="NomAnnoncePerduTrouver" class="col-lg-2 col-form-label">Nom de l'Annonce :</label>
                            <div class="col-lg-4 col-6">
                              <input type="text" class="form-control" id="NomAnnoncePerduTrouver">
                            </div>
                        </div>
                        <!-- Nom de l'Animal-->
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <label for="NomAnimalPerduTrouver" class="col-lg-2 col-form-label">Nom de l'Animal :</label>
                            <div class="col-lg-4 col-6">
                              <input type="text" class="form-control" id="NomAnimalPerduTrouver">
                            </div>
                        </div>
                        <!-- Liste déroulante Espece-->
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <label for="EspeceAnimalPerduTrouver" class="col-lg-2 col-form-label">Espéce :</label>
                            <div class="col-lg-4 col-6">
                                <select class="form-control" id="EspeceAnimalPerduTrouver">
                                    <option>Chien</option>
                                    <option>Chat</option>
                                    <option>Lapin</option>
                                    <option>Oiseaux</option>
                                    <option>Autre</option>
                                </select>
                            </div>
                        </div>
                        <!-- Télécharger Photo-->
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <label for="DowloadPhotoPerduTrouver" class="col-lg-2 col-form-label">Télécharger une Photo :</label>
                            <div class="col-lg-4 col-6">
                                <input type="file" class="form-control-file" id="DowloadPhotoPerduTrouver">
                            </div>
                        </div>                      
                        <!-- Lieu-->
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <label for="LieuPerduTrouver" class="col-lg-2 col-form-label">Lieu :</label>
                            <div class="col-lg-4 col-6">
                              <input type="text" class="form-control" id="LieuPerduTrouver">
                            </div>
                        </div>
                        <!-- Desciption-->
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <label for="DescriptionPerduTrouver" class="col-lg-2 col-form-label">Description :</label>
                            <div class="col-lg-4 col-6">
                                <textarea class="form-control" id="DescriptionPerduTrouver" rows="6"></textarea>
                            </div>
                        </div>
                        <!-- bouton de validation -->
                        <div class="row">
                            <div class="col-lg-5"></div>
                            <div class="col-lg-2">
                                <button type="button" class="btn">Valider</button>
                            </div>
                        </div>
                    </form>
                    <!-- Fin Formulaire-->
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Body Formulaire Perdu Trouver-->
</body>
	</html>
