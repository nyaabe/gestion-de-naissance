<?php 
  session_start();
  if (isset($_SESSION['id']) && isset($_SESSION['name'])) {

 ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>visualisation d'une declaration</title>
  <link rel="stylesheet" href="vendor/css/bootstrap.min.css" />
     
    <link rel="stylesheet" href="vendor/fontawesome/css/all.css" />
    <script src="vendor/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/js/popper.min.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
    
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body style="background-image: url(eau1.jpg);">
   <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">

          <a class="navbar-brand brand-logo" href="index.html"><img src="DAKI.png" alt="techdaki"style="height: 70px; width: 160px;"></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="typcn typcn-th-menu"></span>
          </button>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="mairielogo.jpg" alt="profile"/>
              <span class="nav-profile-name">COMMUNE D'ARRONDISSEMENT DE BAFOUSSAM 1 <sup>er</sup></span>
                <div class="spinner-grow text-success" role="status" style="width: 10px; height: 10px;">
                    <span class="visually-hidden">VIEW...</span>
                      </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="../loginof/logout.php">
                <i class="typcn typcn-eject text-primary"></i>
                Deconnexion
              </a>
            </div>
          </li>
          
        </ul>
       <!--entete-->

        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="typcn typcn-th-menu"></span>
        </button>
      </div>
    </nav>




    <!-- le bouton de reglage qui tourne-->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>

        <div id="theme-settings" class="settings-panel">
          <i class="settings-close typcn typcn-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>


      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar" >
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title">Accueil</span>
              <div class="badge badge-danger">new</div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="typcn typcn-document-text menu-icon"></i>
              <span class="menu-title">Declaration de naissance</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="listeacte.php">declaration naissance</a></li>
                <li class="nav-item"> <a class="nav-link" href="declarationoff.php">New declaration</a></li>
                <li class="nav-item"> <a class="nav-link" href="">others</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="typcn typcn-film menu-icon"></i>
              <span class="menu-title">Gestion naissance</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="acteconforme.php">acte etablie</a></li>
                 <li class="nav-item"><a class="nav-link" href="">Registre</a></li>
                 <li class="nav-item"><a class="nav-link" href="lreconnaissance.php">Liste Reconnaissance</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="typcn typcn-chart-pie-outline menu-icon"></i>
              <span class="menu-title">Impression</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#"></a></li>
                <li class="nav-item"> <a class="nav-link" href="#"></a></li>
                <li class="nav-item"> <a class="nav-link" href="#"></a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="typcn typcn-th-small-outline menu-icon"></i>
              <span class="menu-title">Statistique</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a href="calcul.php"> statistique</a> </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../loginof/logout.php">
              <i class="typcn typcn-lock-closed menu-icon"></i>
              <span class="menu-title">Deconnexion</span>
              
            </a>
          </li>
        </ul>
      </nav>
        
  <div class="main-panel">
        <div class="content-wrapper" style="background-color: white;">


                        
              <!-- fin enfant -->

        <div class="row" style="background-color: white; ">
<h3 align="center" style="font-style: italic; background-color: black;color: white;" >detail de l enfant declarer</h3>

<?php if (isset($_REQUEST['declaration'])):
  $iddeclaration=$_REQUEST['declaration'];
  $conn=mysqli_connect("localhost","root","","daknaiss");
  $declaration="SELECT DISTINCT declaration.* from declaration WHERE declaration.iddeclaration=$iddeclaration";
  $donnee=mysqli_query($conn,$declaration);

  if (mysqli_num_rows($donnee)>0) {
    while ($row = mysqli_fetch_assoc($donnee)){
                      $iddeclaration = $row['iddeclaration'];
                      $idmere = $row['idmere'];
                      $idpere = $row['idpere'];
                      $idtemoin1 = $row['idtemoin1'];
                      $idtemoin2= $row['idtemoin2'];
                      $datedeclaration =$row['Datedeclaration'];
                      $idenfant = $row['idenfant'];
                      $iddeclarant = $row['iddeclarant'];

                      
              
                    }
    // code...
  }
  $mere="SELECT idmere, nomprenommere, lieunaissmere, professionmere, domicilemere, nationalitemere, typedocumentmere, numerodocmere FROM mere WHERE idmere=$idmere ";
  $meree=mysqli_query($conn,$mere);
  if (mysqli_num_rows($meree)>0) {
    while ($mere=mysqli_fetch_assoc($meree)) {
      $nommere=$mere['nomprenommere'];
      $lieunaissm=$mere['lieunaissmere'];
      $professionmere=$mere['professionmere'];
      $domicilemere=$mere['domicilemere'];
      $natmere=$mere['nationalitemere'];
      $typedocm=$mere['typedocumentmere'];
      $numerodocmere=$mere['numerodocmere'];
    }
  }
  $pere="SELECT idpere, nomprenompere, lieunaisspere, professionpere, domicilepere, nationalitepere, typedocumentpere, numerodocpere FROM pere WHERE idpere=$idpere";
  $peree=mysqli_query($conn,$pere);
  if (mysqli_num_rows($peree)>0) {
    while ($pere=mysqli_fetch_assoc($peree)) {
      $nompere=$pere['nomprenompere'];
      $lieunaissp=$pere['lieunaisspere'];
      $professionpere=$pere['professionpere'];
      $domicilepere=$pere['domicilepere'];
      $natpere=$pere['nationalitepere'];
      $typedocp=$pere['typedocumentpere'];
      $numerodocpere=$pere['numerodocpere'];
    }
  }

  $temoi1="SELECT idtemoin, nomprenomtemoin, numeroCNItemoin, datedelivranceCNItemoin, professiontemoin, lieunaisstemoin, datenaisstemoin FROM temoin WHERE idtemoin=$idtemoin1";
  $t1=mysqli_query($conn,$temoi1);



  $temoi2="SELECT idtemoin, nomprenomtemoin, numeroCNItemoin, datedelivranceCNItemoin, professiontemoin, lieunaisstemoin, datenaisstemoin FROM temoin WHERE idtemoin=$idtemoin2";
  $t2=mysqli_query($conn,$temoi2);

  
  $declarant="SELECT iddeclarant, nomprenomdeclarant, numeroCNIdeclarant, datedelivranceCNIdeclarant,parenter FROM declarant WHERE iddeclarant=$iddeclarant";
  $declaran=mysqli_query($conn,$declarant);
  if (mysqli_num_rows($declaran) > 0){
        while ($infodeclarant=mysqli_fetch_assoc($declaran)) {
         $iddeclarant=$infodeclarant['iddeclarant'];
          $nomprenomdeclarant=$infodeclarant['nomprenomdeclarant'];
          $numeroCNIdeclarant=$infodeclarant['numeroCNIdeclarant'];
          $datedelivranceCNIdeclarant=$infodeclarant['datedelivranceCNIdeclarant'];
          $parenter=$infodeclarant['parenter'];
    }
        }

  $enfant="SELECT idenfant, nomenfant, prenomenfant, sexe, lieunaissanceenfant, datenaissanceenfant FROM enfant WHERE idenfant=$idenfant";

 $enfan=mysqli_query($conn,$enfant);
  if (mysqli_num_rows($enfan) > 0){
        while ($infoenfant=mysqli_fetch_assoc($enfan)) {
         $nomenfant=$infoenfant['nomenfant'];
          $prenomenfant=$infoenfant['prenomenfant'];
          $sexe=$infoenfant['sexe'];
          $lieunaissanceenfant=$infoenfant['lieunaissanceenfant'];
          $datenaissanceenfant=$infoenfant['datenaissanceenfant'];

    }
        }


 ?>

  

                  
    <!-- information de l enfant declarer -->
                     <div class="col-12"> 
                <p>
                  <label style="padding-right: 20px;">NOM: </label>
                  <label><?php echo $nomenfant; ?></label>
                </p>
                <p>
      <label style="padding-right: 20px;">PRENOM: </label>
      <label><?php echo  $prenomenfant; ?></label>
    </p>

    <p>
      <label style="padding-right: 20px;">date de naissance: </label>
      <label><?php echo $datenaissanceenfant; ?></label>
    </p>

               
    
<p>
  <label style="padding-right: 20px;">lieu de naissance: </label>
  <label><?php echo $lieunaissanceenfant; ?></label>
</p>

<p>
      <label style="padding-right: 20px;">sexe: </label>
      <label><?php echo $sexe ; ?></label></div>
    </p>

      <!-- information du pere de l enfant declarer -->
    <h3 align="center" style="font-style: italic; background-color: black;color: white;">detail du pere</h3>
     <p>
      <label style="padding-right: 20px;">NOM & PRENOM DU PERE :</label>
      <label><?php echo $nompere; ?></label>
    </p>
     <p>
      <label style="padding-right: 20px;">DOMICILE DU PERE:</label>
      <label class="donne"><?php echo $domicilepere; ?></label>
    </p>
     <p>
      <label style="padding-right: 20px;">PROFESSION: </label>
      <label><?php echo $professionpere; ?></label>
    </p>
     <p>
      <label style="padding-right: 20px;">NEE A: </label>
      <label><?php echo $lieunaissp; ?></label>
    </p>
        <p>
      <label style="padding-right: 20px;">NATIONALITE: </label>
      <label><?php echo $natpere; ?></label>
    </p>

    <p>
      <label style="padding-right: 20px;">DOCUMENT DE REFERENCTE :</label>
      <label><?php echo  $typedocp; ?></label>
    </p>
    <p>
      <label style="padding-right: 20px;">NUMERO :</label>
      <label><?php echo $numerodocpere; ?></label>
    </p>
        <!-- infomation de la mere de l'enfant declarer -->

    <h3 align="center"style="font-style: italic; background-color: black;color: white;">detail de la mere</h3>
     <p>
      <label style="padding-right: 20px;">NOM & PRENOM DE LA MERE :</label>
      <label><?php echo  $nommere; ?></label>
    </p>
     <p>
      <label style="padding-right: 20px;">DOMICILE:</label>
      <label><?php echo $domicilemere  ; ?></label>
    </p>
     <p>
      <label style="padding-right: 20px;">PROFESSION: </label>
      <label><?php  echo  $professionmere; ?></label>
    </p>
     <p>
      <label style="padding-right: 20px;">NEE A: </label>
      <label><?php echo $lieunaissm; ?></label>
    </p>

    <p>
      <label style="padding-right: 20px;">NATIONALITE: </label>
      <label><?php echo $natmere; ?></label>
    </p>

    <p>
      <label style="padding-right: 20px;">DOCUMENT DE REFERENCTE :</label>
      <label><?php echo  $typedocm; ?></label>
    </p>
    <p>
      <label style="padding-right: 20px;">NUMERO :</label>
      <label><?php echo $numerodocmere; ?></label>
    </p>
    

      <!-- information du declarant -->
    <h3 style="font-style: italic; background-color: black;color: white;" align="center">PLUS DE DETAIL</h3>
     <p>
      <label style="padding-right: 20px;">SUR LA DECLARTION DE:</label>
      <label><?php echo $nomprenomdeclarant; ?></label>
    </p>
     <p>
      <label style="padding-right: 20px;">STATUT</label>
      <label><?php echo $parenter ; ?></label>
    </p>
     <p>
      <label style="padding-right: 20px;">DECLARATION FAITE LE: </label>
      <label><?php echo $datedeclaration; ?></label>
    </p>
     <p>
      <label style="padding-right: 20px;"> CNI NUMERO:</label>
      <label><?php echo $numeroCNIdeclarant; ?></label>
    </p>
     <p>
      <label style="padding-right: 20px;">DATE DELIVRANCE</label style="size: 25%;">
      <label><?php echo $datedelivranceCNIdeclarant; ?></label>
    </p>

<!-- INFORMATON CONCERNANT LES TEMOIN 2 QUI ONT ASSISTER A LA NAISSANCE DE L'ENFANT -->


    <h3 style="font-style: italic; background-color: black;color: white;" align="center">TEMOIN 2</h3>
    
        <?php if (mysqli_num_rows($t2) > 0){
        while ($temoinn2=mysqli_fetch_assoc($t2)) {
         $idtemoin22=$temoinn2['idtemoin'];
          $nomprenomtemoin2=$temoinn2['nomprenomtemoin'];
          $numeroCNItemoin2=$temoinn2['numeroCNItemoin'];
          $datedelivranceCNItemoin2=$temoinn2['datedelivranceCNItemoin'];
          $professiontemoin2=$temoinn2['professiontemoin'];
          $lieunaisstemoin2=$temoinn2['lieunaisstemoin'];
          $datenaisstemoin2=$temoinn2['datenaisstemoin'];
          

          ?>


    
 
   
        
     <p>
      <label style="padding-right: 20px;">NOM ET PRENOM:</label>
      <label><?php echo $nomprenomtemoin2; ?></label>
    </p>
    <p>
      <label style="padding-right: 20px;"> NUMERO DE CNI:</label>
      <label><?php echo $numeroCNItemoin2; ?></label>
    </p>
    <p>
      <label style="padding-right: 20px;">DATE DE DELIVRANCE DE LA CNI</label>
      <label><?php echo $datedelivranceCNItemoin2; ?></label>
    </p>

    
  
       
  <?php }} ?>
<?php endif ?>
    <!-- INFORMATON CONCERNANT LES TEMOIN 1 QUI ONT ASSISTER A LA NAISSANCE DE L'ENFANT -->

<h3 style="font-style: italic; background-color: black;color: white;" align="center">TEMOIN 1</h3>
        <?php if (mysqli_num_rows($t1) > 0){
        while ($te1=mysqli_fetch_assoc($t1)) {
         $idtemoin11=$te1['idtemoin'];
          $nomprenomtemoin1=$te1['nomprenomtemoin'];
          $numeroCNItemoin1=$te1['numeroCNItemoin'];
          $datedelivranceCNIte1=$te1['datedelivranceCNItemoin'];
          $professiontemoin1=$te1['professiontemoin'];
          $lieunaisstemoin1=$te1['lieunaisstemoin'];
          $datenaisstemoin1=$te1['datenaisstemoin'];
 
          ?>


    
 
   
        
     <p>
      <label style="padding-right: 20px;">NOM ET PRENOM:</label>
      <label><?php echo $nomprenomtemoin1; ?></label>
    </p>
    <p>
      <label style="padding-right: 20px;"> NUMERO DE CNI:</label>
      <label><?php echo $numeroCNItemoin1; ?></label>
    </p>
    <p>
      <label style="padding-right: 20px;">DATE DE DELIVRANCE DE LA CNI</label>
      <label><?php echo $datedelivranceCNIte1; ?></label>
    </p>

    
  
       
  <?php }} ?>

    


                  
                    
                  </div>

                 <p> 
                  <!-- bouton de validation de la conformite des information de la declaration  -->
                  <button class="btn btn badge-success">
                  <a href="conformitecas1.php?declaration=<?= $iddeclaration;?>" style="text-decoration: none; color:white;"> valide la conformiter</a>
                </button>
                   
                  <!-- ce bouton permet d'etablir un acte de reconnaissance de partenite -->
                  <button class="btn btn badge-info">
                    <a href="reconnaissance.php?declaration=<?= $iddeclaration; ?>" style="text-decoration: none; color:white;">reconnaissance</a>
                    </button>
                    <!-- modifier les information de l enfant -->
                    <button class="btn btn badge-danger">
                    <a href="" style="text-decoration: none; color:white;">editer detail du declarant</a>
                  </button>
                  
                  

              </div>



              <!-- fin information de l enfant -->





       

           
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->



</body>


</html>
<?php 
    }else{
        header("location: ../loginof/logout.php");
           exit();
    }


 ?>
