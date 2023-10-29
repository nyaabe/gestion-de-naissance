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
  <title>daknaiss</title>
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
                <div class="spinner-grow text-success" role="status" style="width: 10px; height: 10px;">
                    <span class="visually-hidden">WELCOME...</span>
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
        
  <div class="main-panel" >
        <div class="content-wrapper" >
          <h2 align="center">Declaration de naissance </h2>
          
          <form method="GET" action="declarationofficier.php">

            <div class="row">
              <div class="col-4">
                <table>
                  <!-- information du declarannt -->
                        <tr>
                          <td>Nous sousigne</td><td><input type="text" name="declarant" class="form-control" required></td>
                        </tr>
                        <tr>
                           <td>CNI NO</td><td> <input type="text" name="cni" class="form-control"></td>
                        </tr>
                        <tr>
                          <td>Delivrer le</td>
                          <td> 
                            <input type="text" name="delivrancedeclarant" class="form-control" required>
                          </td>
                        </tr>

                        <tr>
                          <td>paranter avec l'enfant:</td>
                          <td><input type="text" name="paranter" class="form-control" required></td>

                        </tr>
                        <!-- information de l'enfant -->
                        <tr>
                          <td>certifie que l enfant:</td><td><input type="text" name="nome" class="form-control" required></td>
                        </tr>
                        <tr>
                          <td>prenom de l'enfant:</td><td><input type="text" name="prenome" class="form-control" required></td>
                        </tr>
                        <tr>
                          <td>sexe</td>
                          <td>
                            <select name="sexe" class="form-control sel">
                              <option value="masculin">masculin</option>
                              <option value="feminin">feminin</option>
                          </select>
                          </td>
                        </tr>
                        <tr>
                          <td>Est ne(e) a</td><td><input type="text" name="lieue" class="form-control" required></td>
                        </tr>
                        <tr>
                          <td>Le:</td><td><input type="text" name="datee" class="form-control" required></td>
                        </tr>
                         
                      </table>

              </div>
                            <div class="col-4">

                              <!-- information du pere -->
                                <table>
                  <tr>
                    <td>Fils de </td><td><input type="text" name="pere" class="form-control"></td>

                  </tr>

                  <tr>
                   <td>ne le</td><td><input type="text" name="datep" class="form-control" width="100%"></td>
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
                  <!-- les document -->
                    <tr>
                  <td>
                    type de document du pere
                  </td>
                  <td>
                    <select name="docpere" class="form-control">
                      <option value="">non selectioner</option>
                      <option value="CNI" selected>carte national d'identite</option>
                      <option value="PASSPORT">passport</option>
                      <option value="Carte de sejour">carte de sejour</option>
                      
                    </select>

                  </td>
                  </tr>

                  <tr>
                  <td>
                    numero de reference des document du pere
                  </td>
                  <td>
                    <input type="text" name="numreferencep" class="form-control">
                  </td>
                  </tr>

                  <tr>
                  <td>
                    nationalite du pere
                  </td>
                  <td>
                    <input type="text" name="natpere" class="form-control">
                  </td>
                  </tr>

                  

                </table>
                            </div>
                            <div class="col-4">
                <table>
                  <!-- information de la mere -->
                  <tr>
                    <td>Et de </td><td><input type="text" name="mere" class="form-control" required></td>

                  </tr>

                  <tr>
                   <td>ne(e) le</td><td><input type="text" name="datem" class="form-control" width="100%" required></td>
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
                  <!-- piece -->

                   <tr>
                  <td>
                    type de document du mere
                  </td>
                  <td>
                    <select name="docmere" class="form-control">
                      <option value="CNI">carte national d'identite</option>
                      <option value="PASSPORT">passport</option>
                      <option value="Carte de sejour">carte de sejour</option>
                      
                    </select>

                  </td>
                  </tr>

                  <tr>
                  <td>
                    numero de reference des document du mere
                  </td>
                  <td>
                    <input type="text" name="numreferencem" class="form-control"required>
                  </td>
                  </tr>

                  <tr>
                  <td>
                    nationalite de la mere
                  </td>
                  <td>
                    <input type="text" name="natmere" class="form-control" required >
                  </td>
                  </tr>

                  






                </table>
                            
                       </div>
                       <h5 align="center">En foi de quoi cette declaration est delivrer pour servir et valoir ce que de droit</h5>
            </div>


            <div class="row">
              <div class="col-sm-6">
                <table>
                  <!-- temoin du pere  -->
                  <tr>
                    <td>Temoin num 1</td><td><input type="text" name="tem1" class="form-control"></td>

                  </tr>

                  <tr>
                   <td>CNI num</td><td><input type="text" name="tem1cni" class="form-control" width="100%"></td>
                  </tr>

                  <tr>
                    <td>Date delivrance</td>
                      <td>
                        <input type="text" name="delivrancetem1" class="form-control">
                    </td>
                  </tr>
                </table>
              </div>
              <div class="col-sm-6">
                <!-- temoin de la mere -->
                <table>
                  <tr>
                    <td>Temoin num 2</td><td><input type="text" name="tem2" class="form-control"></td>

                  </tr>

                  <tr>
                   <td>CNI num</td><td><input type="text" name="tem2cni" class="form-control" width="100%"></td>
                  </tr>

                  <tr>
                    <td>Date delivrance</td>
                      <td>
                        <input type="text" name="delivrancetem2" class="form-control">
                    </td>
                  </tr>
                </table>
                
              </div>
              
              
            </div>

           
            <u><h5 align="center">fait a.... le <label><?php  $date= date("j:m:Y");echo  $date; ?></label></h5></u>
            <input type="submit" name="declareroff"class="btn btn-success">
            <input type="reset" name="annuler" class="btn btn-danger">
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

