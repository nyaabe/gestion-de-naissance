<?php 
	if(isset($_REQUEST['reconnait'])){
		$iddeclaration=$_REQUEST['iddeclaration'];
		$jour=date("j");
		$mois=date("m");
		$annee=date("y");
		$numreconnaissance= "$jour"."$mois"."$annee";
		$date=date("j-m-Y");
		// date qu'elle a ete effectuer
		$datreconnaissance=$_REQUEST['datreconnaissance'];
		// nom officier
		$nomofficier=$_REQUEST['nomofficier'];
		$centre=$_REQUEST['centre'];
		// information du pere
		$reconnaisseur=$_REQUEST['reconnaisseur'];
		$datep=$_REQUEST['datep'];
		$lieup=$_REQUEST['lieup'];
		$nomp1=$_REQUEST['nomp1'];
		$prop=$_REQUEST['prop'];
		// enfant reconnu
		$enfantreconnu=$_REQUEST['enfantreconnu'];
		$sexe=$_REQUEST['sexe'];
		$dateenfant=$_REQUEST['dateenfant'];
		$lieuenfant=$_REQUEST['lieuenfant'];
		// information de la mere
		$nommere=$_REQUEST['nommere'];
		$lieumere=$_REQUEST['lieumere'];
		$nomp2=$_REQUEST['nomp2'];
		$nomm2=$_REQUEST['nomm2'];
		$professionmere=$_REQUEST['professionmere'];
		// temoin 1
		$nomtemoin1=$_REQUEST['nomtemoin1'];
		$datetemoin1=$_REQUEST['datetemoin1'];
		$professiontemoin1=$_REQUEST['professiontemoin1'];
		// temoin 2
		$nomtemoin2=$_REQUEST['nomtemoin2'];
		$datetemoin2=$_REQUEST['datetemoin2'];
		$professiontemoin2=$_REQUEST['professiontemoin2'];

	}

	if (empty($reconnaisseur))  {
		echo " remplissez correctement les information du pere";
	}else{

		    
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
				}
				$pere="UPDATE pere SET nomprenompere='$reconnaisseur',lieunaisspere='$lieup',professionpere='$prop',datepere='$datep' WHERE idpere=$idpere ";
				
				$perereconnu=mysqli_query($conn,$pere);
				// parent du pere
         $parent2="INSERT INTO parentmere(idparentmere, mere2, pere2, idmere) VALUES (null,'$nomm2','$nomp2','$idmere')";
				$parent22=mysqli_query($conn,$parent2);
				// parent de la mere
				$parent1="INSERT INTO parentpere (idparentpere, mere1, pere1, idpere) VALUES (null,'$nomm2','$nomp2','$idpere')";
				$parent11=mysqli_query($conn,$parent1);
				// enfant
				$enfant="UPDATE enfant SET nomenfant='$enfantreconnu',sexe='$sexe',lieunaissanceenfant='$lieuenfant',datenaissanceenfant='$dateenfant' WHERE idenfant=$idenfant";
				$enfant1=mysqli_query($conn,$enfant);
				// temoin1
				$temoin1="UPDATE temoin SET nomprenomtemoin='$nomtemoin1',professiontemoin='$professiontemoin1',datenaisstemoin='$datetemoin1' WHERE idtemoin=$idtemoin1";
				$temoin11=mysqli_query($conn,$temoin1);
				// temoin 2
				$temoin2="UPDATE temoin SET nomprenomtemoin='$nomtemoin2',professiontemoin='$professiontemoin2',datenaisstemoin='$datetemoin2' WHERE idtemoin=$idtemoin2";
				$temoin22=mysqli_query($conn,$temoin2);
				// modification du statut de la declaration en valide
				$declaration="UPDATE declaration SET idofficier ='1',statut='valide' WHERE iddeclaration=$iddeclaration";
				$declaration1=mysqli_query($conn,$declaration);
				// acte
				$acte="INSERT INTO actenaissance(idacte, iddeclaration, dresserle, le, SE, numeroacte, idregistre) VALUES (null,'$iddeclaration','$date','$date ','ivana wa','$jour','1')";
				$acte1=mysqli_query($conn,$acte);
				$idacte=mysqli_insert_id($conn);
				// reconnaissance
				$reconnaissance="INSERT INTO reconnaissance(idreconaissance, numeroreconaissance, datereconaissance, idacte) VALUES (null,'$numreconnaissance','$date','$idacte')";
				$reconnaissan=mysqli_query($conn,$reconnaissance);

				header("location:Lreconnaissance.php");

		}

 ?>