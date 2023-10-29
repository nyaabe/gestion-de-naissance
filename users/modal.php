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
	<title>modal</title>
	 <title>declaration pour centre de sante</title>
  <link rel="stylesheet" href="vendor/css/bootstrap.min.css" />
     
    <link rel="stylesheet" href="vendor/fontawesome/css/all.css" />
    <script src="vendor/js/jquery.min.js"></script>
    <script src="vendor/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
    <script src="dataTables.bootstrap5.min.js" type="text/javascript"></script> 
    <link rel="shortcut icon" href="mairielogo.png">


</head>
<body style=" background-color:aqua;">

  <div class="row" style="margin-top:10%;padding-left: 20%;">
    <div class="col-sm-3"></div>
     <div class="col-sm-6" >
       <div class="card mt-3" style="width:60%;">
         <div class="card-body" align="center">
          <img src="val.png" align="center">
          

          <?php if (isset($_REQUEST['matricule'])): $mat=$_REQUEST['matricule'] ?>
           <p style="text-align: justify;">declaration de naissance effectuer rendez a la mairie muni de vos pieces,matricule de la declaration est:  <?php echo "$mat";?> </p>
   
          <?php endif ?>
           
         </div>
         <div class="card-footer">
           <button class="btn btn-success"><a href=" declaration.php" style="text-decoration:none; color: white;">New</a></button> 
           <button class="btn btn-danger"align="right" style="padding-left: 10%;"><a href="../login/logout.php" style="text-decoration:none; color: white; ">Exit</a></button>
         </div>
       </div>
     </div>
      <div class="col-sm-"></div>
    
  </div>
	

</body>
</html>
<?php 
    }else{
        header("location: ../login/logout.php");
           exit();
    }


 ?>