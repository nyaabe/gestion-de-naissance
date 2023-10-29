<?php 	
		if (isset($_REQUEST['declaration'])) {
			$iddeclaration=$_REQUEST['declaration'];
					$jour=date("j");
					$mois=date("m");
					$annee=date("y");
					$numacte= "$jour"."$mois"."$annee";
					$date=date("j-m-Y");
					$conn=mysqli_connect("localhost","root","","daknaiss");

			  		$declaration="SELECT DISTINCT declaration.* from declaration WHERE declaration.iddeclaration=$iddeclaration";
 					 $donnee=mysqli_query($conn,$declaration);

 				if (mysqli_num_rows($donnee)>0) {
    				while ($row = mysqli_fetch_assoc($donnee)){
                      $iddeclaration = $row['iddeclaration'];
                      $idmere = $row['idmere'];
                      $idpere = $row['idpere'];

                      $datedeclaration =$row['Datedeclaration'];
                      $idenfant = $row['idenfant'];
                      $iddeclarant = $row['iddeclarant'];
                    }
    
  				}

				// modification du statut de la declaration en valide
				$declaration="UPDATE declaration SET idofficier ='1',statut='valide' WHERE iddeclaration=$iddeclaration";
				$declaration1=mysqli_query($conn,$declaration);
				// acte
				$acte="INSERT INTO actenaissance(idacte, iddeclaration, dresserle, le, SE, numeroacte, idregistre) VALUES (null,'$iddeclaration','$date','$date ','ivana wa','$numacte','1')";
				$acte1=mysqli_query($conn,$acte);
				$idacte=mysqli_insert_id($conn);
				header("location:../acte/acte2.php?acte=$iddeclaration");
		}

 ?>