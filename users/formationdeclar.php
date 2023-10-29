    <?php 
    session_start();

    if (isset($_SESSION['id']) && isset($_SESSION['name'])) {


    


     ?>
<?php 

    if (isset($_REQUEST['declarer'])) {
        $conn=mysqli_connect("localhost","root","","daknaiss");

        // recuperation des information de l enfant
        $nome=$_REQUEST['enfant'];
        $prenome=$_REQUEST['prenome'];
        $datee=$_REQUEST['datee'];
        $lieunaisse=$_REQUEST['lieue'];
        $sexe=$_REQUEST['sexe'];
        // recuperation des information du pere

        $nompere=$_REQUEST['nomp'];
         
         $datenaissp=$_REQUEST['datep'];
         $professionp=$_REQUEST['prop'];
         $lieunaissp=$_REQUEST['lieup'];
         
         $domicilep=$_REQUEST['domp'];

        

         // recuperation des information de la mere


        $nommere=$_REQUEST['nommere'];
         
         $datenaissm=$_REQUEST['datem'];
         $professionm=$_REQUEST['prom'];
         $lieunaissm=$_REQUEST['lieum'];
         
         $domicilem=$_REQUEST['domm'];

        // recuperation des information du declarant
         $declarant=$_REQUEST['declarant'];
         // date de la declaratio de naissance
         $datedeclar=date("j-m-Y");

             // enfant
         $enfant="INSERT INTO enfant(idenfant, nomenfant, prenomenfant, sexe, lieunaissanceenfant, datenaissanceenfant) VALUES (null,'$nome','$prenome','$sexe','$lieunaisse','$datee')";
         $tbenfant=mysqli_query($conn,$enfant);


         if ($tbenfant) {
            // indentifiant de l enfant declarer recuperer ici
             $idenfant= mysqli_insert_id($conn);
             // insertion de la mere et recuperation de l identifiant

             $mere="INSERT INTO mere(idmere,nomprenommere, lieunaissmere, professionmere, domicilemere, nationalitemere, typedocumentmere, numerodocmere,datemere) VALUES (null,'$nommere','$lieunaissm','$professionm','$domicilem','camerounaise','CNI','kit278','$datenaissm')";
             $tbmere=mysqli_query($conn,$mere);
                $idmere= mysqli_insert_id($conn);

                // insertion du pere et recuperation de l identifiant

             $pere="INSERT INTO pere(idpere, nomprenompere, lieunaisspere, professionpere, domicilepere, nationalitepere,typedocumentpere, numerodocpere,datepere) VALUES (null,'$nompere','$lieunaissp','$professionp','$domicilep','camerounaise','CNI','kit2799','$datenaissp')";
             $tbpere=mysqli_query($conn,$pere);

             $idpere= mysqli_insert_id($conn);

             // insertion du declarant

             $declarant="INSERT INTO declarant(iddeclarant, nomprenomdeclarant, numeroCNIdeclarant, datedelivranceCNIdeclarant,parenter) VALUES (null,'$declarant','RAS','RAS','RAS')";
             $tbdeclarant=mysqli_query($conn,$declarant);

             $iddeclarant= mysqli_insert_id($conn);

                      // temoin1
        $temoin1="INSERT INTO temoin(idtemoin, nomprenomtemoin, numeroCNItemoin,datedelivranceCNItemoin,professiontemoin, lieunaisstemoin, datenaisstemoin) VALUES (null,'non defini','non defini','non defini','non defini','non defini','non defini')";
             $tbtemoin1=mysqli_query($conn,$temoin1);
             $idtemoin1= mysqli_insert_id($conn);

             

              // insertion du temoin 1
             $temoin2="INSERT INTO temoin(idtemoin, nomprenomtemoin, numeroCNItemoin,datedelivranceCNItemoin,professiontemoin, lieunaisstemoin, datenaisstemoin) VALUES (null,'nondef2','non defini','non defini','non defini','non defini','non defini')";

             $tbtemoin2=mysqli_query($conn,$temoin2);
             $idtemoin2= mysqli_insert_id($conn);
             
             // 

             // declaration de naissance

             $declaration="INSERT INTO declaration(iddeclaration, idenfant, idofficier, idagent, iddeclarant, idmere, idpere, idtemoin1, idtemoin2, Datedeclaration, statut) VALUES (null,' $idenfant','0','1','$iddeclarant','$idmere','$idpere','$idtemoin1','$idtemoin2','$datedeclar','en attente')";

             $tbdeclaration=mysqli_query($conn,$declaration);
             $iddeclaration= mysqli_insert_id($conn);
              if ($tbdeclaration) {

                header("location:modal.php?matricule=$iddeclaration");
                  
              }elseif (!$tbdeclaration) {
                  header("location:declaration.php?valider=la declaration a rencontrer un soucis veillez recoomencer");
                  exit();
              }


         }
           
    } elseif (!isset($_REQUEST['declarer'])) {
         header("location:declaration.php?valider=remplissez et valider");
         exit();

        
    }


 ?>
 <?php 
    }else{
        header("location: ../loginof/logout.php");
           exit();
    }


 ?>

