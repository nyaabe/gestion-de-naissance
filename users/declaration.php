<?php 
    session_start();
     if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
      $name=$_SESSION['name'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>declaration pour centre de sante</title>
  <link rel="stylesheet" href="vendor/css/profile.css" />
  <link rel="stylesheet" href="vendor/css/bootstrap.min.css" />
     
    <link rel="stylesheet" href="vendor/fontawesome/css/all.css" />
    <link rel="stylesheet" href="vendor/jquery-ui.min.css">
    <link rel="stylesheet" href="vendor/jquery-te-1.4.0.css">
    <link rel="stylesheet" type="text/css" href="vendor/css/profile.css">
    <script src="vendor/js/jquery.min.js"></script>
    <script src="vendor/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/js/index.js"></script>
    <script src="vendor/js/popper.min.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.min.js"></script>
    <script src="vendor/jquery-te-1.4.0.min.js"></script>
    <script src="vendor/jquery-ui.js"></script>
    <script src="jquery.dataTables.min.js" type="text/javascript"></script> 
    <script src="dataTables.bootstrap5.min.js" type="text/javascript"></script> 
    <script src="admin.js" type="text/javascript"></script> 
	<style type="text/css">
	


body{
  background-image: url("fleur.jpg");
  background-position: center;
  background-size: 100%;
  background-repeat: no-repeat;
  background-attachment:fixed;
  
}

  #declaration{

margin-top: 2%;

opacity: 1.2;



    
  }
  #bas{


        

  }
  input[type=text],input[type=date]{
    font-style: italic;
    width: 100%;
    font-variant-caps:titling-case;

  }
  #sel{
    width: 100%;
  }
  .card{
    width: 100%;
    background-color: #ff8431;
    

  }
  #img{
    width: 20%;
    height: 30%;
    margin-top: 5%;
  }

  h5{
    color: ;
    background-position-x: -21;
    margin-bottom: 5%;
  }



	</style>
  <link rel="shortcut icon" href="mairielogo.png">

</head>
<body >

      <div class="container-fluid"class="nav" >
    <div class="row " class="titre">
        <div class="col-12" >
             <div class="header" style="background-color:black;">
                <a href="#default" class="logo" style="color:white">TechDAKI<i class="fas fa-hand-holding-heart " style="color: red;"></i></a>
                <div class="header-right">
                    <a class="active" href="index.php">Home</a>
                    <a href="#propos" style="color:white">aidez nous</a>
                    <a href="../login/logout.php"style="color:white">Deconnexion</a>
                    <a href="#propos"style="color:white"> A propos</a>
                    
                 </div>
            </div> 
        </div> 
    </div>
</div>
<!-- information de l enfant-->
<form class="form-control" method="GET" action="formationdeclar.php" >

 

          
                <div class="card">
                  <div class="card-header">
                    
                    
                  </div>
                  <div class="card-body">
                    <div class="row" id="declaration">
                    <h5 align="center">Etat Civil du Cameroun <br> declaration de naissance en ligne pour formation sanitaire <br> DAknaiss</h5>
                    <!-- information du declarer -->
                     <div class="col-sm-4">
                      <table>
                        <!-- information du declarant -->
                        <tr>
                          <td>Nous sousigne</td><td><input type="text" name="declarant" class="form-control" required></td>
                        </tr>
                        <!-- nom de l enfant -->
                        <tr>
                           <td>Certifions l'enfant de nom</td><td> <input type="text" name="enfant" class="form-control" required></td>
                        </tr>
                        <tr>
                           <td>prenom enfant:</td><td> <input type="text" name="prenome" class="form-control"></td>
                        </tr>
                        <tr>
                          <td>De sexe</td>
                          <td> 
                          <select name="sexe" class="form-control" id="sel" required>
                          <option value="masculin">Masculin</option>
                          <option value="feminin">Feminin</option>
                          </select>
                          </td>
                        </tr>

                        <tr>
                          <td colspan="2">Est ne(e) au centre mediacale de la police</td>

                        </tr>
                        <tr>
                          <td>le</td><td><input type="date" name="datee" class="form-control" required></td>
                        </tr>
                        <tr>
                          <td>A</td><td><input type="text" name="lieue" class="form-control" required></td>
                        </tr>
                         
                      </table>

                    


                    
                  
                
              </div>


              <div class="col-sm-4">
                <!-- information du pere -->

                <table>
                  <tr>
                    <td>Fils de </td><td><input type="text" name="nomp" class="form-control"></td>

                  </tr>

                  <tr>
                   <td>ne le</td><td><input type="date" name="datep" class="form-control" width="100%"></td>
                  </tr>

                  <tr>
                    <td>A</td>
                      <td>
                        <input type="text" name="lieup" class="form-control">
                    </td>
                  </tr>

                  <tr>
                    
                    <td>
                      Profession
                    </td>
                    <td>
                      <input type="text" name="prop" class="form-control">
                    </td>
                  </tr>
                  <tr>
                  <td>
                    Domicile
                  </td>
                  <td>
                    <input type="text" name="domp" class="form-control">

                  </td>
                  </tr>

                </table>
                      
                  </div>
                <!-- fin information du pere -->

                  <div class="col-sm-4">
                    <!-- information de la mere -->

                    <table>
                  <tr>
                    <td>Et de </td><td><input type="text" name="nommere" class="form-control" required></td>

                  </tr>

                  <tr>
                   <td>ne(e) le</td><td><input type="date" name="datem" class="form-control" width="100%" required></td>
                  </tr>

                  <tr>
                    <td>A</td>
                      <td>
                        <input type="text" name="lieum" class="form-control" required>
                    </td>
                  </tr>

                  <tr>
                    
                    <td>
                      Profession
                    </td>
                    <td>
                      <input type="text" name="prom" class="form-control" required>
                    </td>
                  </tr>
                  <tr>
                  <td>
                    Domicile
                  </td>
                  <td>
                    <input type="text" name="domm" class="form-control" required>

                  </td>
                  </tr>




                </table>
                
                 

                    

              <input type="submit" name="declarer" value="envoyer" class="btn btn-primary">
              <input type="reset" name="" class="btn btn-danger">
                    
                  </div>
               
              

              
            
          </div>
        </div>
      </div>


          
        
</form>
  

<!-- partie du foother -->

  <div class="container-fluid mt-5" style="background-color:black;" id="bas">
        <div class="row ">
            <div class="col-sm-2">
                
            </div>
            <div class="col-sm-8">
                <a href="#default" class="logo">daktech <i class="fas fa-hand-holding-heart " style="color: red;"></i></a>
                <hr>
            </div> 
            <div class="col-sm-2">
                
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-2">
                
            </div>
            <div class="col-sm-3">
            <form>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                     <div class="input-group-btn">
                        <button class="btn btn-danger" type="submit">envoyer</button>
                    </div>
                 </div>
            </form> <br>
            <!-- reseau sociaux-->
            <p>
               <i class="fab fa-instagram"></i>
               <i class="fab fa-facebook"></i>
               <i class="fab fa-twitter"></i>
               <i class="fab fa-youtube"></i>
               <i class="fab fa-whatsapp"></i> 
            </p>
                
            </div>
            <div class="col-sm-2">
                <div><a href="#">Acceuille</a></div>
                <div><a href="#">A propos de daktech</a></div>
                <div><a href="#">Expert(es)</a></div>
                <div><a href="#">Contatez nous</a></div>
            </div>
            <div class="col-sm-2">
                <div><a href="#">Plan du site</a></div>
                <div><a href="#">Terme et condition</a></div>
                <div><a href="#">politique et confidentialite</a></div>
            </div>
            
        </div>
        
    </div>

</body>



    


</html>
<?php 
    }else{
        header("location: ../login/logout.php");
           exit();
    }


 ?>