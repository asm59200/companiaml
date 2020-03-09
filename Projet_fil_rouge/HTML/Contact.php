<!DOCTYPE html>
<html>
<head>

            <title>Contact</title>
            <link rel="stylesheet" href="../css/bootstrap.css"/>
            <link rel="stylesheet" href="../css/style.css"/>
           
            <link rel="icon" href="../img/patteblanche.png">
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
            
  <body>
      <!-- Body Contact -->
    <div class="Background-Form">
        <div class="container-fluid">
            <!-- Titre Formulaire -->
            <div>
              <h1 class="Titre">Contactez-Nous</h1>
            </div>
            <!-- Fin Titre Formulaire-->

            <!-- Formulaire -->
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form>
                        <!-- EMail Contact -->
                        <div class="form-group row">
                            <label for="EmailContact" class="col-sm-4 col-form-label">Adresse E-Mail :</label>
                            <div class="col-sm-6 col-8">
                              <input type="text" class="form-control" id="EmailContact">
                            </div>
                        </div>
                        <!-- Sujet Contact-->
                        <div class="form-group row">
                            <label for="SujetContact" class="col-sm-4 col-form-label">Sujet :</label>
                            <div class="col-sm-6 col-8">
                              <input type="text" class="form-control" id="SujetContact">
                            </div>
                        </div>
                        <!-- Message Contact -->
                        <div class="form-group row">
                            <label for="MessageContact" class="col-sm-4 col-form-label">Votre Message</label>
                            <div class="col-sm-6 col-10">
                                <textarea class="form-control" id="MessageContact" rows="6"></textarea>
                            </div>
                        </div>
                        <!-- Bouton envoi formulaire contact-->
                        <div class="row">
                            <div class="col-sm-2 offset-4">
                                <button type="button" class="btn">Valider</button>
                            </div>
                        </div>
                    </form> 
                <!-- Fin Formulaire-->   
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Body Contact-->
</body>
</html>