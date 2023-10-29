
<html lang="en">
<head>
	<title>modification departement</title>
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
		<div class="col-sm-5">
			<a href="../index.php">acceuil</a>
		</div>
		<div class="col-sm-3">

			<p><a href="" style="padding-right: %; height: ;"><i class="fab fa-facebook" style="color:blue; height: 20px;"></i></a>
				<a href=""><i class="fab fa-whatsapp-square" style="color: green; height:20px; padding-right:2px"></i></a></p>
			</div>
		</div>
		<div class="row ">

			<div class="col-sm-3 "style="background-color: black;">
				<ul type="none">
					<div id="accordion">
						<h3 style="background-color: transparent;">DEPARTEMENT</h3>
						<div style="border-color: transparent; background-color:black;color: white; text-decoration: ;">
							<li><a href="INSERTIOND.PHP" style="text-decoration:none; color:white;"> ajouter un departement</a></li>
							<li><a href="index.PHP"style="text-decoration:none;color: white;"> afficher les departement</a></li>
							

						</div>
						
					</div>
				</div></ul>
				<div class="col-sm-9" >
					<div class="card">
						<div class="card-header">
							<h2 align="center"><b>modification DEPARTEMENT</b></h2>

						</div>

						<div class="card-body">
							

							<form method="POST" action="">
								<?php
								$serveur="localhost";
								$user="root";
								$password="";
								$bd="institut";
								$conn= mysqli_connect($serveur,$user,$password,$bd);
								if (isset($_GET['update'])) {
									$id=$_GET['update'];
									$sqll="SELECT * FROM departement WHERE id=$id";
									$result = mysqli_query($conn,$sqll);
									if (mysqli_num_rows($result) > 0) {
										while ($row = mysqli_fetch_assoc($result)){
											$id = $row['id'];
											$name = $row['Name'];
											$description = $row['description'];
										}
									}

								}
								?>
								
								<div class="row">
									<div class="col-sm-12" >
										<nav> 
											<input type="hidden" name="iddepartent" value="<?php  echo $id; ?>">
											NAME:<input type="text" name="nom"style="width:60%; padding-right: 40px;"  value="<?php  echo $name; ?>">

										</nav>
										<nav> DESCRIPTION:<textarea id="input" name="description"><?php  echo  $description ?>
									</textarea></nav>
								</div>
							</div>
							<div class="card-foother">
								<div align="center">
									<input type="submit" name="envoyer" value="save">
									<input type="reset" name="effacer" value="reset">
								</div>
							</div></form>

						</div>

					</div>
				</div>
			</body>
			<script>

				$(document).ready(function(){
					$("#input").jqte()
				});
			</script>
			</html>
			<?php
			$serveur="localhost";
			$user="root";
			$password="";
			$bd="institut";
			$conn= mysqli_connect($serveur,$user,$password,$bd);
			if (isset($_GET['update'])) {
				$id=$_GET['update'];
				if(isset($_POST['envoyer'])){
					extract($_POST);
					$sql= "UPDATE departement SET name='$nom',description= '$description' where id=$id ";
					$requete=mysqli_query($conn,$sql);
				}

			}
			
			
		?>