 <?php 
  $serveur="localhost";
        $user="root";
        $password="";
        $bd="ecole";
        $conn= mysqli_connect($serveur,$user,$password,$bd);

  ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <title>INSCRIPTION</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="vendor/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/fontawesome/css/all.min.css" rel="stylesheet">
  <link href="vendor/jquery-te-1.4.0.css" rel="stylesheet">
  <link href="vendor/jquery-ui.min.css" rel="stylesheet">
  <script src="vendor/jquery.min.js"></script> 
  <script src="vendor/js/bootstrap.bundle.min.js"></script> 
  <script src="vendor/jquery-te-1.4.0.min.js"></script>
  <script src="vendor/jquery-ui.min.js"></script>
  <script src="vendor/fontawesome/js/all.min.js"></script>
  <link href="vendor/menu.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="vendor/page1.css">
  <script src="vendor/jspage2.js"></script>

</head>
<body style="background-image:url('moi.png');background-repeat: no-repeat;background-attachment: fixed;background-position: center;">
 <div class="row " style="background-color:black;color:white;">
  <div class="col-sm-4">

    <nav style="text-align: left; padding-left: 10px;"><img src="moi.png" style="border-radius:100% ; height:60px; width: 60px;" align="left"><label style="margin-top:15px;font-size: 20px;"> TCHONANG HIGHER INSTITUT</label></nav>

  </div>
  <div class="col-sm-3">
    <a href="../index.php"> acceuil</a>
  </div>
  <div class="col-sm-5">
    <a href="ETUDIANT.php">listing</a>

   <p><a href="" style="padding-right: %; height: ;"><i class="fab fa-facebook" style="color:blue; height: 20px;"></i></a>
    <a href=""><i class="fab fa-whatsapp-square" style="color: green; height:20px; padding-right:2px"></i></a></p>
  </div>
</div>
<div class="row ">


  <div class="col-sm-12" >
    <div class="card">
      <div class="card-header">
        <h2 align="center"><b>INSERTION D'UN ETUDIANT </b></h2>

      </div>
      <div class="card-body">
        <?php
       
        $sql="select * from eleve order by name asc";
        $departement=mysqli_query($conn,$sql);
        ?>
        <?php
        $sql="select * from level order by description asc";
        $requete=mysqli_query($conn,$sql);

        ?>

        <form method="post" action="inscription.php" enctype="multipart/form-data">
          <table style="width:100%">
            <tr>
              <td></td><td></td>
            </tr>
            <tr>
              <td>
               <p style="margin-top: 5px;"><label>FIRST NAME:</label></p>
                 <p><label>LAST NAME</label></p>
               <p><label>DATE DE NAISSANCE:</label></p>
               <p><label>LAST NAME:</label></p> 
               <p>photo</p>
              </td>
              <td>
          <p><input type="text" name="first" style="width:60%;"class="form-control"required></p>
<p><input type="text" class="form-control" name="last" type="text" style="width:60%;" required></p>
<p> <input type="date" name="date" id="datepicke" class="form-control"style="width:60%;"required></p>
<p> <input type="file" name="photo" class="form-control" style="width:60%;"required></p>
              </td>
            </tr>
          </table>

           
          
          
        </div>
        <div class="col-sm-6">

          <table style="width:100%;">
             <tr>
              <td></td><td></td></tr>

                        <tr>
              <td><p>specialiter</p>
                <p>NIVEAU: </p>
              </td>
              <td align="center">
                <p><select class="form-control" name="idspecialiter">
                  <?php foreach ($eleve as $key):?>

                    <option value="<?= $key['id'];?>">
                      <?= $key['nom'];?>
                    </option>
                  <?php endforeach; ?>
                </select></p>
                <p> <select class="form-control" name="idlevel">
              <option value="">

              </option>
            </select></p>
              </td>
            </tr>
          </table>
        </div>
    <div class="card-foother">
      <div align="center">
        <input type="submit" name="enregistrer">
        <input type="reset" name="effacer">
      </div>
    </div>
  </form>











</div>

</div>
</div>
</body>
<script>

  $(document).ready(function(){
    $(".input").jqte()
  });
</script>
</html>
<?php 
if (isset($_POST['enregistrer'])) {
  $nom= $_POST['first'];
  $prenom= $_POST['last'];
  $date= $_POST['date'];
  $idspecialiter= $_POST['idspecialiter'];
  $idlevel= $_POST['idlevel'];
  
  $photo=$_FILES['photo']['name'];
  $tmp_nom=$_FILES['photo']['tmp_name'];
  $emplacement="image/$photo";
  $move = move_uploaded_file($tmp_nom,$emplacement);
  var_dump($move);

  $annee= date("Y");
  $annsuivant=$annee+1;
  $year_accademic= "$annee - $annsuivant";
  $sql="INSERT INTO student(id, first_name, last_name, birth,photo) VALUES (null,'$nom','$prenom','$date','$emplacement')";
  $etudiant= mysqli_query($conn,$sql);

  if ($etudiant) {
    $idetudiant = mysqli_insert_id($conn);
    $sqlen="INSERT INTO enrollment (id_speciality, id_student, id_level, academic_year) VALUES ('$idspecialiter','$idetudiant','$idlevel','$year_accademic')";
    $enregistrement= mysqli_query($conn,$sqlen);
    echo "enregistrement terminer";
  }
  else{
    echo "enregistrement terminer";
  }


}
$conn=null;
?>