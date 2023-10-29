<?php 
    session_start();

    if (isset($_SESSION['id']) && isset($_SESSION['name'])) {


    


     ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>liste declaration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="vendor/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/fontawesome/css/all.min.css" rel="stylesheet">
  <link href="vendor/jquery-te-1.4.0.css" rel="stylesheet">
  <link href="vendor/jquery-ui.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="vendor/page1.css">
  <link href="vendor/jquery.dataTables.min.css" rel="stylesheet">
  <script src="vendor/jquery.min.js"></script>
  <script src="vendor/jquery-table.js"></script>
  <script src="vendor/js/bootstrap.bundle.min.js"></script> 
  <script src="vendor/jquery-te-1.4.0.min.js"></script>
  <script src="vendor/jquery-ui.min.js"></script>
  <script src="vendor/fontawesome/js/all.min.js"></script>
  <link href="vendor/menu.css" rel="stylesheet">
  <script src="vendor/dataTables.bootstrap4.min.js" ></script>
  <script src="vendor/jquery.dataTables.min.js"></script>  

  <script src="vendor/jspage2.js"></script>

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
<body style="background-image: url(eau1.jpg);">
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
                <li class="nav-item"><a class="nav-link" href="ajoutecentre.php">nouveau</a></li>
                 <li class="nav-item"><a class="nav-link" href="listecentre.php">lister centre</a></li>
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
        
  <div class="main-panel" >
  <div class="content-wrapper" >

    <?php 
  $conn=mysqli_connect("localhost","root","","daknaiss");
  $listecentre="SELECT idcentre, codecentre, colllectivitelocal, libelle, region, departement, arrondissement FROM centredetat ";
  $sql=mysqli_query($conn,$listecentre);
  

    ?>
 
    
      <div class="card">
        <div class="card-header">
          <h5 align="center"><b>LISTE DES CENTRE D'ETAT CIVIL</b></h2>
        </div>
        <div class="card-body">
          <form method="POST" action="">
          
              <table id="example" class="table table-striped table-bordered" style="width:100%">           
                <thead style="color: green;">
                  <tr>
                    <th>NOM</th>
                    <th>DEPARTEMENT</th>
                    <th>ARRONDISSEMENT</th>
                    <th>CODE</th>
                    
                    <th>action</th>
                  </tr>

                </thead>
                <tbody>
                  <?php foreach ($sql as $key): ?>
                    
                  
                   <tr align="center">
                    <td><?= $key['libelle'];?></td>
                    <td><?= $key['departement'];?></td>
                    <td><?= $key['arrondissement'];?></td>
                    <td><?= $key['codecentre'];?></td>
                    
                    <td align="right" >
       
                    
                      <a href="<?= $key['idcentre'];?>" style="color:white;" class="btn btn-danger">
                        <i class="fas fa-trash-alt" style="height: 15px;"></i>
                      </a>
                      <a href="modifieacte.php?<?= $key['idcentre'];?>" style="color:white; padding-left: 15px;"class="btn btn-info">
                        <i class="far fa-edit" style="height: 15px;">
                          
                        </i></a>
                    </td>
                  </tr>
                 <?php endforeach ?>
                  </tbody>

                </table>
                </form>

              
            </div>
          </div>
        </div>
   
      

        

  </body>
  <script type="text/javascript">
   $(document).ready(function () {
    $('#example').DataTable();
  }); 
</script>
</html>
<?php 
    }else{
        header("location: ../loginof/logout.php");
           exit();
    }


 ?>
