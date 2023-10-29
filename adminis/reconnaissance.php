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
  <title>RECONNAISSANCE</title>
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
  <style type="text/css">
    input[type=text],.sel{
      background-color:#ff8431;
    }
  </style>
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
        
  <div class="main-panel" >
        <div class="content-wrapper" >
          <h3 align="center">FICHE DE RECONNAISSANCE D'ENFANT NEE HORS MARIAGE</h2>
            <?php 
                if (isset($_REQUEST['declaration'])) {
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

    $mere="SELECT idmere, nomprenommere, lieunaissmere, professionmere, domicilemere, nationalitemere, typedocumentmere, numerodocmere,datemere FROM mere WHERE idmere=$idmere ";
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
      $datemere=$mere['datemere'];
    }
  }
  $pere="SELECT idpere, nomprenompere, lieunaisspere, professionpere, domicilepere, nationalitepere, typedocumentpere, numerodocpere,datepere FROM pere WHERE idpere=$idpere";
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
      $datepere=$pere['datepere'];
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

  $enfant="SELECT idenfant, nomenfant, prenomenfant, sexe, lieunaissanceenfant, datenaissanceenfant FROM enfant WHERE 1";

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

        if (mysqli_num_rows($t2) > 0){
        while ($temoinn2=mysqli_fetch_assoc($t2)) {
         $idtemoin22=$temoinn2['idtemoin'];
          $nomprenomtemoin2=$temoinn2['nomprenomtemoin'];
          $numeroCNItemoin2=$temoinn2['numeroCNItemoin'];
          $datedelivranceCNItemoin2=$temoinn2['datedelivranceCNItemoin'];
          $professiontemoin2=$temoinn2['professiontemoin'];
          $lieunaisstemoin2=$temoinn2['lieunaisstemoin'];
          $datenaisstemoin2=$temoinn2['datenaisstemoin'];
            }}

            if (mysqli_num_rows($t1) > 0){
        while ($te1=mysqli_fetch_assoc($t1)) {
         $idtemoin11=$te1['idtemoin'];
          $nomprenomtemoin1=$te1['nomprenomtemoin'];
          $numeroCNItemoin1=$te1['numeroCNItemoin'];
          $datedelivranceCNIte1=$te1['datedelivranceCNItemoin'];
          $professiontemoin1=$te1['professiontemoin'];
          $lieunaisstemoin1=$te1['lieunaisstemoin'];
          $datenaisstemoin1=$te1['datenaisstemoin'];
              }}
// parentese de fin
  }

             ?>
          <hr class="bg-success">
          <form method="GET" action="validereconnaissance.php">

            <div class="row">
              <div class="col-sm-4">
                <table>
                        <tr>
                          <input type="text" name="iddeclaration" hidden value="<?php echo $iddeclaration ; ?>">
                          <td>LE:</td><td><input type="text" name="datreconnaissance" class="form-control" readonly value="<?php echo $date=date("j-m-Y");?>"></td>
                        </tr>
                        <tr>
                           <td>On compararue par devant nous:</td><td> <input type="text" name="nomofficier" class="form-control" value="WAFO PIERRE" readonly></td>
                        </tr>
                        <tr>
                          <td>officier du centre d'etat civil:</td>
                          <td> 
                            <input type="text" name="centre" class="form-control" value="COMMUNE DE BAFOUSSAM 1" readonly>
                          </td>
                        </tr>

                        <tr>
                          <td>Le nomme :</td>
                          <td><input type="text" name="reconnaisseur" class="form-control" value="<?php echo $nompere ;?>"></td>

                        </tr>
                        <tr>
                          <td>Ne le:</td><td>
                            <input type="text" name="datep" class="form-control" value="<?php echo $datepere ; ?>"> pere de l'enfant</td>
                        </tr>
                        
                         
                      </table>

              </div>
                            <div class="col-sm-4">
                                <table>
                  <tr>
                    <td>A :</td><td><input type="text" name="lieup" class="form-control" value="<?php echo $lieunaissp; ?>"></td>

                  </tr>

                  <tr>
                   <td>fils de:</td><td><input type="text" name="nomp1" class="form-control" width="100%"></td>
                  </tr>

                  <tr>
                    <td>et de:</td>
                      <td>
                        <input type="text" name="nomm1" class="form-control">
                    </td>
                  </tr>

                  <tr>
                    
                    <td>
                      exercant la profession de :
                    </td>
                    <td>
                      <input type="text" name="prop" class="form-control" value="<?php echo $professionpere; ?>">
                    </td>
                  </tr>
                  <tr>
                    <td>qui declare etre le pere naturel de:</td>
          <td><input type="text" name="enfantreconnu" class="form-control" value="<?php echo $nomenfant; echo $prenomenfant;?>" readonly></td>

                  </tr>


                </table>
                  </div>
                            <div class="col-4">
                <table>


                  <tr>
                   <td>DE sexe</td><td>
                    <select name="sexe" class="form-control">
                      <
                     <option value="<?= $sexe?>"><?php echo $sexe; ?></option>
                   </select></td>
                  </tr>

                  <tr>
                    <td>ne(e) le</td>
                      <td>
                        <input type="text" name="dateenfant" class="form-control" value="<?php echo $datenaissanceenfant; ?>" readonly>
                    </td>
                  </tr>

                  <tr>
                    
                    <td>
                      A
                    </td>
                    <td>
                      <input type="text" name="lieuenfant" class="form-control" value="<?php echo$lieunaissanceenfant ; ?>" readonly>
                      hors mariage
                    </td>
                  </tr>
                  <tr>
                  <td>
                    En presence de la nomme(e)
                  </td>
                  <td>
                    <input type="text" name="nommere" class="form-control" value="<?php echo $nommere ; ?>" readonly>

                  </td>
                  </tr>
                                    <tr>
                  <td>
                    nee le(vers)
                  </td>
                  <td>
                    <input type="text" name="datemere" class="form-control" value="<?php echo $datemere ; ?>" readonly>

                  </td>
                  </tr>



                </table>
                            
                      
            </div>
          </div>
          <hr class="bg-primary">
            

            <div class="row">
              <div class="col-sm-4">
                <table>
                  <tr>
                    <td>A</td><td>
                      <input type="text" name="lieumere" class="form-control" value="<?php echo $lieunaissm; ?>">mere de l'enfant
                    </td>

                  </tr>

                  <tr>
                   <td>fille de:</td><td><input type="text" name="nomp2" class="form-control" width="100%"></td>
                  </tr>

                  <tr>
                    <td>et de</td>
                      <td>
                        <input type="text" name="nomm2" class="form-control">
                    </td>
                  </tr>

                </table>
                
              </div>
              <div class="col-sm-8">
                <table>
                  <tr>
                    <td>Exercant la profession de:</td>
                    <td><input type="text" name="professionmere" class="form-control" value="<?php echo $professionmere; ?>"></td>

                  </tr>

                  

                </table>
                
              </div>
            </div>

            <hr class="bg-primary">
             <h5 align="center">On confirmer ces declaration</h5>

            <div class="row">
              <div class="col-sm-6">
                <table>
                  <tr>
                    <td>1 <sup>er</sup> temoin</td>
                    <td><input type="text" name="nomtemoin1" class="form-control" value="<?php echo $nomprenomtemoin1; ?>">
                    </td>

                  </tr>

                  <tr>
                   <td>ne(e) le:</td><td>
                    <input type="text" name="datetemoin1" class="form-control" value="<?php echo $datenaisstemoin1; ?>"></td>
                  </tr>

                  <tr>
                    <td>profession</td>
                      <td>
                        <input type="text" name="professiontemoin1" class="form-control" value="<?php echo $professiontemoin1; ?>">
                    </td>
                  </tr>

                </table>
                
              </div>
              <div class="col-sm-6">
                                  <table>
                  <tr>
                    <td>2 <sup>eme</sup> temoin</td>
                    <td><input type="text" name="nomtemoin2" class="form-control" value="<?php echo $nomprenomtemoin2; ?>"></td>

                  </tr>

                  <tr>
                   <td>ne(e) le:</td></td>
                    <td>
                        <input type="text" name="datetemoin2" class="form-control" value="<?php echo $datenaisstemoin2 ; ?>" >
                    </td>
                  </tr>

                  <tr>
                   <td>profession</td></td>
                    <td>
                        <input type="text" name="professiontemoin2" class="form-control" value="<?php echo $professiontemoin2;?>">
                    </td>
                  </tr>
                </table>
                
              </div>
            </div>
            <hr class="bg-success">
            <input type="submit" name="reconnait" class="btn btn-success" value="RECONNAISSANCE VALIDE">
            <input type="reset" name="annuler" class="btn btn-danger"value="annuler">
          </form>

            
            

            
    

           
      
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

