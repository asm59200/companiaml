<!DOCTYPE html>
	<html>
		<head>
			<meta charset=``utf-8`` />
            <title>Inscription</title>
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


      <div class="container">
        <div>
          <div class="row">
            <div class="col-lg-2 offset-lg-5 ">
            <h1 class="Titre">Inscription</h1>
            </div>
          </div>
        </div>
        <!-- formulaire inscrition-->
        <div class="row">
          <div class="col-lg-8 offset-lg-2">

        <form class="was-validated">     
            <div class="form-group row">
              <div class="col-lg-3"></div>
                <label for="inputname" class="col-lg-2 col-form-label">Nom</label>
                <div class="col-lg-5 col-7">
                  <input type="text" class="form-control is-valid" id="inputname" required>
                </div>
            </div>

            <div class="form-group row">
              <div class="col-lg-3"></div>
                <label for="inputsurname" class="col-lg-2 col-form-label">Prénom</label>
                <div class="col-lg-5 col-7">
                  <input type="text" class="form-control is-valid" id="inputsurname" required>
                </div>
            </div>

            <div class="form-group row">
              <div class="col-lg-3"></div>
                <label for="inputadresse" class="col-lg-2 col-form-label">Adresse</label>
                <div class="col-lg-6 col-8">
                  <input type="text" class="form-control is-valid" id="inputadresse" required>
                </div>
            </div>

            <div class="form-group row">
              <div class="col-lg-3"></div>
                <label for="inputpostcode" class="col-lg-2 col-form-label">Code postal</label>
                <div class="col-lg-4 col-6">
                  <input type="text" class="form-control is-valid" id="inputpostcode" required>
                </div>
            </div>

              <div class="form-group row">
                  <div class="col-lg-3"></div>
                <label for="inputtown" class="col-lg-2 col-form-label">Ville</label>
                <div class="col-lg-6 col-8">
                  <input type="text" class="form-control is-valid" id="inputtown" required>
                </div>
            </div>

            <div class="form-group row ">
              <div class="col-lg-3"></div>
                <label for="inputtel" class="col-lg-2 col-form-label">Téléphone</label>
                <div class="col-lg-4 col-6">
                  <input type="tel" class="form-control is-valid" id="inputtel" required>
                </div>
            </div>

            <div class="form-group row">
              <div class="col-lg-3"></div>
                <label for="inputEmail3" class="col-lg-2 col-form-label">Email</label>
                <div class="col-lg-5 col-7">
                  <input type="email" class="form-control is-valid" id="inputEmail3" required>
                </div>
            </div>

            <div class="form-group row">
              <div class="col-lg-3"></div>
                <label for="inputpassword" class="col-lg-2 col-form-label">Mot de passe</label>
                <div class="col-lg-5 col-6">
                  <input type="password" class="form-control is-valid" id="inputpassword" required>
                </div>
            </div>

            <div class="form-group row">
              <div class="col-lg-3"></div>
                <label for="inputpassword" class="col-lg-2 col-form-label">Confirmer MdP</label>
                <div class="col-lg-5 col-7">
                  <input type="password" class="form-control is-valid" id="inputpassword" required>
                </div>
            </div>

            <div class="row">
              <div class="col-lg-5"></div>
              <div class="col">
                <button class="btn " type="submit">Valider</button>
              </div>
            </div>
        </form>    
      </div>

      <!-- footer       -->
     
     <!-- fin footer       -->
		</body>
	</html>
