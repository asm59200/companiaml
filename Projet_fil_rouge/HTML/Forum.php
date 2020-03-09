<!DOCTYPE html>
	<html>
		<head>
			<meta charset=``utf-8`` />
            <title>Forum Topic</title>
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

<!-- Titre ALIMENTATION -->

      <div class="container text-center">
        <div class="row mt-5 mb-5">
          <div class="col-4"></div>
          <div class="col-4 titrealim">Alimentation</div>
          <div class="col-4 "></div>
        </div>
      </div>

<!-- Créé TOPIC -->        
        <div class="container text-center backgroundforum">
          <div class="row mt-4 pt-3">
            <div class="col-3"></div>
            <div class="col-6"><button class="btn créetopic" type="submit"><a>Interroger la communauté</a></button></div>
            <div class="col-3 "></div>
          </div>

<!-- Barre de Recherche -->
          <div class="row mt-3">
            <div class="offset-1"></div>

<!-- Bouton recherche -->
            <div class="col-10 barrerechercheforum pt-2 pb-2 mb-3">
              <label for="site-search">Recherche sur le forum:</label>
              <div class="row">
                <div class="col-2"></div>
              <input style="margin-bottom: 10px; text-align: center;" class="col-8 form-control" type="text" placeholder="Que cherche-vous ?" aria-label="Search">
              </div>
              <button class="btn">Rechercher</button>
            </div>
            <div class="offset-1"></div>
          </div>

<!-- Nom Topic et Date -->       
        <div class="row pb-3">
          <div class="col-1"></div>
          <div class="col-5 bordertopic borderradiusl noborderright barreretopicforum pl-5 pt-5 pb-5 text-left">Nom du Topic</div>
          <div class="col-2 bordertopic barreretopicforum pt-5 pb-5">Date</div>

<!-- Bouton Modifier et Supprimer --> 
          <div class="col-3 row bordertopicl borderradiusr bnttopic"> 
                  <div class="col-12 butmosp"><button class="btn mt-3 créetopic" type="submit"><a>Modifier</a></button></div>
                  <div class="col-12 butmosp"><button class="btn créetopic" type="submit"><a>Supprimer</a></button></div>
          </div>  
          <div class="col-1"></div>
        </div>  
        
        </div>
        <div class="row justify-content-center">
          <nav aria-label="Page navigation example">
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

        
      <!-- footer       -->
     
     <!-- fin footer       -->
		</body>
	</html>
