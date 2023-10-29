    <?php 
    session_start();

    if (isset($_SESSION['id']) && isset($_SESSION['name'])) {


    


     ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>bienvenue sur la page de declarations de naissances</title>
	 <link rel="stylesheet" href="vendor/css/bootstrap.min.css" />
     <link rel="stylesheet" href="vendor/css/profile.css" />
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

<style type="text/css">
  
   /* Dropup Button */
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

/* The container <div> - needed to position the dropup content */
.dropup {
    position: fixed;
    display: inline-block;
    height: 60px;
    

}

/* Dropup content (Hidden by Default) */
.dropup-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropup */
.dropup-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropup links on hover */
.dropup-content a:hover {background-color: #ddd}

/* Show the dropup menu on hover */
.dropup:hover .dropup-content {
    display: block;
}

/* Change the background color of the dropup button when the dropup content is shown */
.dropup:hover .dropbtn {
    background-color: #3e8e41;
} 
</style>
    </style>

</head>
<body >
    <!-- debut de l entete-->

<div class="container-fluid"class="nav">
    <div class="row " class="titre">
        <div class="col-12">
             <div class="header" style="background-color:black;">
                <a href="#default" class="logo" style="color:white">DakTech <i class="fas fa-hand-holding-heart " style="color: red;"></i></a>
                <div class="header-right">
                    <a class="active" href="declaration.php">Start</a>
                    <a href="#help" style="color:white">Aidez nous</a>
                    <a href="../login/logout.php" style="color:white">Connexion</a>
                    <a href="#sms" style="color:white">Message</a>
                 </div>
            </div> 
        </div> 
    </div>
</div>

 <!-- FIN DE L ENTETE -->

    <div class="container-fluid mt-5"> <!-- DEBUT DU DEBUT DE LA PAGE -->
        <div class="row mt-5">
            <div class="col-sm-2">
                
            </div>
            <div class="col-sm-6">
                <div class="card" style="text-decoration:none;border-color:transparent;">
                    <div class="card-body">
                        <p><h4 style="color: blue;">Bienvenue sur daknaiss <?php echo $_SESSION['name'] ; ?></h4></p>
                        <p> Suivez attentivement les etapes pour effectuer correctement votre declaration de naissance! <br>NB:<b style="color:red;">VOUS NE POUVEZ FAIRE QU'UNE SEUL DECLARATION DE NAISSANCE POUR UN ENFANT</b>.<br>

   
                        </p>
                    </div>
                </div>
                
            </div>
            <div class="col-sm-4">
                
            </div>
            
        </div>
        <!-- information de l enfant-->

            <div class="row mt-3">
            <div class="col-sm-2">
                                         <div class="dropup">
  <button class="dropbtn btn-primary">faites une declaration maintenant!!</button>
  <div class="dropup-content">
    <a href="declaration.php" class="a">declaration de naissance</a>
    <a href="#">delaration de mariage</a>
    <a href="#">declaration de deces</a>
  </div>
</div> 

                
            </div>
            <div class="col-sm-6">
                <div class="card" style="text-decoration:none;border-color:transparent;">
                    <div class="card-header">
                        <h5><button type="button" class="btn btn-primary">Etape <br><span class="badge">1</span></button> 
                           <span><b> Information de l enfant.</b></span></h5>
                    </div>
                    <div class="card-body" style="background-color:lightseagreen;">
                        <img src="saisi.png" style="width:100%">
                    </div>
                </div>
                
            </div>
            <div class="col-sm-4">
                
            </div>
            
        </div>
        <!--information du pere-->
            



    </div>
    <!--foother de la page -->
    <div class="container-fluid mt-5" style="background-color:black;">
        <div class="row footer">
            <div class="col-sm-2">
                
            </div>
            <div class="col-sm-8">
                <a href="#default" class="logo">daktech <i class="fas fa-hand-holding-heart " style="color: red;"></i></a>
                <hr>
            </div> 
            <div class="col-sm-2">
                
            </div>
        </div>
        
        <div class="row" >
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
            <p style="color:white;">
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