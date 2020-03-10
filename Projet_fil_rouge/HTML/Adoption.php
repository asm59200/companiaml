<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8" />
            <title>Adoption</title>
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
      <!-- debut page       -->
      <div class="container-fluid ">
        <div class="row">
          <div class="col-sm-12 justify-content-center ">
            <!-- bloc recherche position top en sm -->
            <div class="col-sm-6 offset-sm-3 aside-adopt  mt-4  d-xs-block d-md-block d-lg-none d-xl-none ">
              <div class="row bloc-aside justify-content-center ">
                <form class="was-validated">
                  <div class="form-group row mt-2 justify-content-center ">
                      <label for="inputname" class="col-sm-3 col-form-label">Espece</label>
                      <input type="text" class="col-sm-10 form-control is-valid" id="inputname" required>
                  </div>
                  <div class="form-group row  justify-content-center ">
                    <label for="inputname" class="col-sm-3 col-form-label">Race</label>
                    <input type="text" class="col-sm-10 form-control is-valid" id="inputname" required>
                  </div>
                  <div class="form-group row mt-2 justify-content-center ">
                    <label  class="col-sm-6 col-form-label text-center">Sex</label>
                  </div>
                  <div class="row mb-3">
                  <div class="form-check col-5 text-left">
                    <label class="form-check-label col-10" for="exampleRadios1">
                      Mâle
                    </label>
                    <input class="form-check-input col-2" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                  </div>
                 
                  <div class="form-check col-7 ">
                    <label class="form-check-label col-11" for="exampleRadios1">
                      Femelle
                    </label>
                    <input class="form-check-input col-1" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
                  </div>
                </div>
                <div class="row justify-content-center">
                  <label for="customRange3 " class="text-center">Age</label>
                  <input type="range" class="custom-range col-11" min="0" max="5" step="0.5" id="customRange2">   
                  <label  class="col-sm-6 col-form-label text-center">refuge</label>
                  <select class="custom-select col-10 mb-3" required>
                    <option selected  ></option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- bloc annonces adoption -->
        <div class="row justify-content-center ">

          <div class="col-lg-8 mb-3">
            <div class="row justify-content-center ">
              <div class="col-lg-3 text-center ">
                <button class="btn btn-admin mt-3" type="submit">
                  <a style="color: white;" href="http://localhost/ProjetDWWM/HTML/FormAdoption.php?Action=AjoutAdoption">Créer une annonce</a>
                </button>
              </div>
            </div>
            <div class="row aff-article justify-content-around mt-3 ">
              <div class="col-lg-3 col-md-7 col-sm-8  aside-adopt m-3">
                <div class="row bloc-aside justify-content-center ">
                  <h5 class="pt-2">Panpan</h5>
                  <a href=""><img class="img-aside" src="../img/lapin_trouve.jpg" alt=""></a> 
                  <div class="col-12 adop_dessous_carte"></div>    
                </div> 
              </div>
              <div class="col-lg-3 col-md-7 col-sm-8  aside-adopt m-3">
                <div class="row bloc-aside justify-content-center ">
                  <h5 class="pt-2">Panpan</h5>
                  <a href=""><img class="img-aside" src="../img/lapin_trouve.jpg" alt=""></a> 
                  <div class="col-12 adop_dessous_carte"></div>    
                </div> 
              </div>
              <div class="col-lg-3 col-md-7 col-sm-8  aside-adopt m-3">
                <div class="row bloc-aside justify-content-center ">
                  <h5 class="pt-2">Panpan</h5>
                  <a href=""><img class="img-aside" src="../img/lapin_trouve.jpg" alt=""></a> 
                  <div class="col-12 adop_dessous_carte"></div>    
                </div> 
              </div>
              <div class="col-lg-3 col-md-7 col-sm-8  aside-adopt m-3">
                <div class="row bloc-aside justify-content-center ">
                  <h5 class="pt-2">Panpan</h5>
                  <a href=""><img class="img-aside" src="../img/lapin_trouve.jpg" alt=""></a> 
                  <div class="col-12 adop_dessous_carte"></div>    
                </div> 
              </div>
              <div class="col-lg-3 col-md-7 col-sm-8  aside-adopt m-3">
                <div class="row bloc-aside justify-content-center ">
                  <h5 class="pt-2">Panpan</h5>
                  <a href=""><img class="img-aside" src="../img/lapin_trouve.jpg" alt=""></a> 
                  <div class="col-12 adop_dessous_carte"></div>    
                </div> 
              </div>
             
            </div>
          </div>
             <!-- bloc recherche en aside en lg -->
            
          <div class="col-lg-2 aside-adopt d-lg-3 mt-4 d-none d-lg-block text-center title-filtre ml-5 ">
            <div class="col-12 title-filtre mt-3">
                  <h5 >Filtrer</h5>
            </div>
            <div class="row bloc-aside1 justify-content-center ">
              <form class="was-validated">
                <div class="form-group row mt-2 justify-content-center ">
                    <label for="inputname" class="col-sm-3 col-form-label">Espece</label>
                    <input type="text" class="col-sm-10 form-control is-valid" id="inputname" required>
                </div>
                <div class="form-group row  justify-content-center ">
                  <label for="inputname" class="col-sm-3 col-form-label">Race</label>
                  <input type="text" class="col-sm-10 form-control is-valid" id="inputname" required>
                </div>
                <div class="form-group row mt-2 justify-content-center ">
                  <label  class="col-6 col-form-label text-center">Sexe</label>
                </div>
                <div class="row mb-3">
                  <div class="form-check col-12 text-left">
                    <label class="form-check-label col-10" for="exampleRadios1">
                      Mâle
                    </label>
                    <input class="form-check-input col-1 " type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                  </div>
                 
                  <div class="form-check col-12 text-left">
                    <label class="form-check-label col-10" for="exampleRadios1">
                      Femelle
                    </label>
                    <input class="form-check-input col-1" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
                  </div>
                </div>
                <div class="row justify-content-center">
                  <label class="col-6 text-center" for="customRange3">Age</label>
                  <input type="range" class="custom-range col-10 age-color" min="0" max="5" step="0.5" id="customRange3">   
                  <label  class=" col-6 col-form-label text-center">refuge</label>
                  <select class="custom-select col-10 mb-3" required>
                    <option selected  ></option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </form>
            </div>
          </div>
          </div>
        </div>
            
          <div class="row ">
            <div class="col-2 offset-4  mt-3 text-center " >
                <nav aria-label="Page navigation example" class="text-center">
                  <ul class="pagination ">
                    <li class="page-item ">
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
            </div>
            
         
        </div>
      </div>
      <!-- debut page       -->
      <!-- footer       -->
     
     <!-- fin footer       -->
		</body>
	</html>
