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
                    <form>
                        <!-- Nom de l'annonce-->
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <label for="NomAnnonceFormPetSitter" class="col-lg-3 col-form-label">Nom de l'Annonce :</label>
                            <div class="col-lg-4 col-6">
                              <input type="text" class="form-control" id="NomAnnonceFormPetSitter">
                            </div>
                        </div>
                        
                        <!-- Lieu -->
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <label for="CodePostalLieuPetSitter" class="col-lg-3 col-form-label">Code Postal :</label>
                            <div class="col-lg-4 col-6">
                              <input type="number" class="form-control" id="CodePostalPetSitter">
                            </div>
                        </div>
                        <!-- Type de Garde-->
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <label for="GardePetSitter" class="col-lg-3 col-form-label">Type de Garde</label>
                            <div class="col-lg-4 col-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ChezMoi" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="ChezMoi">Chez moi</label>
                                  </div>

                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ChezVous" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="ChezVous">Chez vous</label>
                                  </div>

                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Promenade" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="Promenade">Promenade</label>
                                  </div>
                            </div>
                        </div>
                        <!-- Type de domicile -->
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <label for="DomicilePetSitter" class="col-lg-3 col-form-label">Chez Moi</label>
                            <div class="col-lg-4 col-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Maison" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="Maison">Maison</label>
                                  </div>

                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Appartement"" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="Appartement">Appartement</label>
                                  </div>
                            </div>
                        </div>
                        <!--Télécharger une photo-->
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <label for="DowloadPhotoPetSitter" class="col-lg-3 col-form-label">Télécharger une Photo :</label>
                            <div class="col-lg-4 col-6">
                                <input type="file" class="form-control-file" id="DowloadPhotoPetSitter">
                            </div>
                        </div>    
                        <!-- Esepece Animal Gardé-->
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <label for="EspecePetSitter" class="col-lg-3 col-form-label">Espéce d'Animal Gardé:</label>
                            <div class="col-lg-4 col-6">
                                <select class="form-control" id="EspecePetSitter">
                                    <option>Chien</option>
                                    <option>Chat</option>
                                    <option>Aligator</option>
                                </select>
                            </div>
                        </div>
                        <!-- Information Complémentaire-->
                        <div class="form-group row">
                            <div class="col-lg-3"></div>
                            <label for="InfoCompPetSitter" class="col-lg-3 col-form-label">Information Complémentaire</label>
                            <div class="col-lg-4 col-6">
                                <textarea class="form-control" id="InfoCompPetSitter" rows="6"></textarea>
                            </div>
                        </div>
                        <!-- Bouton envoie Formulaire Pet'sitter-->
                        <div class="row">
                            <div class="col-lg-6"></div>
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
    <!-- Fin Body Pet'Sitter-->
</body>
</html>