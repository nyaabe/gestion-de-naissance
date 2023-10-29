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
  <title>statistique daknaiss</title>
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
</head>
<body>
  <!-- affichage et annimation -->
  
        
        <i class="typcn typcn-delete-outline" id="bannerClose"></i>
      
  <!-- fin -->

  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">

          <a class="navbar-brand brand-logo" href="index.html">Daknaiss </a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="typcn typcn-th-menu"></span>
          </button>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="../mairielogo.jpg" alt="profile"/>
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
            <a class="nav-link" href="../index.php">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title">Accueil</span>
              <div class="badge badge-danger">new</div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="typcn typcn-document-text menu-icon"></i>
              <span class="menu-title">REGISTRE</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="">liste registre</a></li>
                <li class="nav-item"> <a class="nav-link" href="">ajouter registre</a></li>
                <li class="nav-item"> <a class="nav-link" href=""></a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="typcn typcn-film menu-icon"></i>
              <span class="menu-title">CENTRE</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="">nouveau</a></li>
                 <li class="nav-item"><a class="nav-link" href="">lister centre</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="typcn typcn-chart-pie-outline menu-icon"></i>
              <span class="menu-title">UTILISATEUR</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">lister officier</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">ajouter officier </a></li>
                
                <li class="nav-item"> <a class="nav-link" href="#">lister agent</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">ajouter agent</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="typcn typcn-th-small-outline menu-icon"></i>
              <span class="menu-title">formation sanitaire</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="">liste formation</a></li>

                <li class="nav-item"> <a class="nav-link" href="">nouveau</a></li>
              </ul>
            </div>
          </li>





          <li class="nav-item">
            <a class="nav-link" href="../../loginof/logout.php">
              <i class="typcn typcn-lock-closed menu-icon"></i>
              <span class="menu-title">Deconnexion</span>
              
            </a>
          </li>
        </ul>
      </nav>


        <?php 
        $conn=mysqli_connect("localhost","root","","daknaiss");
          $centree="SELECT `idcentre`, `codecentre`, `colllectivitelocal`, `libelle`, `region`, `departement`, `arrondissement` FROM `centredetat` WHERE 1";
          $affiche=mysqli_query($conn,$centree);

           ?>

      <div class="main-panel">
        <div class="content-wrapper">
          
            <div class="row">
              <div class="col-3"></div>
              <div class="col-6">
                <div class="card">
                  <div class="card-header">
                    <h3 style="font-style:oblique;">ajouter un utilisateur</h3>
                  </div>
                  <div class="card-body"> 
                    <form method="POST" action="">
                    <div>
                      <label>NOM</label>
                      <input type="text" name="nom" class="form-control" style="font-style: italic;">
                    </div>
                      <div>
                      <label>PRENOM</label>
                      <input type="text" name="prenom" class="form-control">
                    </div>
                      <div>
                      <label>FONCTION</label>
                      <select name="fonction" class="form-control">
                        <option value="officier">OFFICIER D'ETAT CIVIL</option>
                        <option value="agent">AGENT DE SAISI</option>
                      </select>
                      </div>
                                          
                      <div>
                      <label>STATUT</label>
                      <select name="statut" class="form-control">
                        <option value="actif">actif</option>
                        <option value="inactif">inactif</option>
                      </select>
                      </div>
                                          
                      <div>
                      <label>USERNAME</label>
                        <input type="text" name="uname" class="form-control">
                      </div>
                                          
                      <div>
                      <label>PASSWORD</label>
                          <input type="text" name="pass" class="form-control">

                      </div>
                                            <div>
                      <label>CENTRE D ETAT CIVILE</label>
                      <select name="centre" class="form-control">
                        <?php foreach ($affiche as $key): ?>
                          
                        
                        <option value="<?= $key['idcentre']?>"><?= $key['libelle']?></option>
                        <?php endforeach ?>
                      </select>
                      </div>
                      <input type="submit" name="officier" class="btn btn bg-success" value="save">
                      <input type="reset" name="non" class="btn btn bg-danger" value="save">

                    </form>

                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-3"></div>
              
            </div>
            

          </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
                    
        </footer>
        <!-- partial -->
      </div>
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

<?php 


if (isset($_POST['officier'])) {
  $nom=$_REQUEST['nom'];
  $prenom=$_REQUEST['prenom'];
  $statut=$_REQUEST['statut'];
  $fonction=$_REQUEST['fonction'];
  $uname=$_REQUEST['uname'];
  $pass=$_REQUEST['pass'];
  $centre=$_REQUEST['centre'];
  //sauvergade des information dans la table officier  d etat civil base de donnee daknaiss
$conn=mysqli_connect("localhost","root","","daknaiss");
  $centre="INSERT INTO officier(idofficier, nom, prenom, fonction, statut, motpasse, username, centre) VALUES (null,'$nom','$prenom','$fonction','$statut','$pass','$uname','$centre')";
  $savecentre=mysqli_query($conn,$centre);

  
   
  
  
}
  // INSERT INTO `formationsanitaire`(`idformation`, `codeformation`, `libelleformation`, `region`, `departement`, `arrondissement`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')

 ?>

</html>

<?php 
    }else{
        header("location: ../../loginof/logout.php");
           exit();
    }


 ?>

