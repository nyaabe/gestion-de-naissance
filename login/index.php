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
  <title>authentification daknaiss</title>
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body background="secu.jpg">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <p align="center"><img src="secu.jpg"></p>
                <h5 style="color: green; font-style: italic; font-family:serif;" align="center">Authentification </h5>


              </div>
              
              <form action="log.php" method="GET" class="pt-3">
                

                <div class="form-group">
                  <input type="text" class="form-control form-control-lg "  placeholder="Username" name="uname">
                  <p class="uname">                
                  <?php 
                if(isset($_GET['uname'])) { echo $_GET['uname'];}?>
                  
                </p>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg " placeholder="Password" name="password">
                   <p class="pass">                
                  <?php 
                if(isset($_GET['pass'])) { echo $_GET['pass'];}?>
                  
                </p>         
                </div>
                <div class="mt-3">
                  <input type="submit" name=" valide" class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn-info" value="CONNEXION">
                  
                </div>
                  
               
               
               
              </form>



            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
<?php 
    }else{
        header("location: loginof/logout.php");
           exit();
    }


 ?>
