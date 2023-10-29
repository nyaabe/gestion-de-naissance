<?php 
  session_start();
  if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
  
  $iddeclaration=$_REQUEST['declaration'];

   $conn=mysqli_connect("localhost","root","","daknaiss");
   // acte

  //  $acte="SELECT `idacte`, `iddeclaration`, `dresserle`, `le`, `SE`, `numeroacte`, `idregistre` FROM `actenaissance` idacte=$idacte ";
  //  $acte2=mysqli_query($conn,$acte);
  //   if (mysqli_num_rows($acte2)>0) {
  //   while ($row = mysqli_fetch_assoc($acte2)){
  //                     $iddeclaration = $row['iddeclaration'];
  //                     $dresserle = $row['dresserle'];
  //                     $le = $row['le'];

  //                     $numeroacte =$row['Datedeclaration'];
  //                     $idregistre = $row['idregistre'];
                      

                      
              
  //                   }
  //   // code...
  // }

   // idacte
  $declaration="SELECT DISTINCT declaration.* from declaration WHERE declaration.iddeclaration=$iddeclaration";
  $donnee=mysqli_query($conn,$declaration);

  if (mysqli_num_rows($donnee)>0) {
    while ($row = mysqli_fetch_assoc($donnee)){
                      $iddeclaration = $row['iddeclaration'];
                      $idmere = $row['idmere'];
                      $idpere = $row['idpere'];
                      $idtemoin1=$row['idtemoin1'];
                      $datedeclaration =$row['Datedeclaration'];
                      $idenfant = $row['idenfant'];
                      $iddeclarant = $row['iddeclarant'];
                      $idtemoin1=$row['idtemoin1'];
                      $idtemoin2=$row['idtemoin2'];

                      
              
                    }
    // code...
  }
  // mere

   $mere="SELECT idmere, nomprenommere, lieunaissmere, professionmere, domicilemere, nationalitemere, typedocumentmere, numerodocmere,datemere FROM mere WHERE idmere=$idmere ";
  $meree=mysqli_query($conn,$mere);
  if (mysqli_num_rows($meree)>0) {
    while ($mere=mysqli_fetch_assoc($meree)) {
      $nommere=$mere['nomprenommere'];
      $lieunaissm=$mere['lieunaissmere'];
      $professionmere=$mere['professionmere'];
      $domicilemere=$mere['domicilemere'];
      $natmere=$mere['nationalitemere'];
      $typedocm=$mere['typedocumentmere'];
      $numerodocmere=$mere['numerodocmere'];
      $datenaissm=$mere['datemere'];
    }
  }
  // pere
  $pere="SELECT idpere, nomprenompere, lieunaisspere, professionpere, domicilepere, nationalitepere, typedocumentpere, numerodocpere,datepere FROM pere WHERE idpere=$idpere";
  $peree=mysqli_query($conn,$pere);
  if (mysqli_num_rows($peree)>0) {
    while ($pere=mysqli_fetch_assoc($peree)) {
      $nompere=$pere['nomprenompere'];
      $lieunaissp=$pere['lieunaisspere'];
      $professionpere=$pere['professionpere'];
      $domicilepere=$pere['domicilepere'];
      $natpere=$pere['nationalitepere'];
      $typedocp=$pere['typedocumentpere'];
      $numerodocpere=$pere['numerodocpere'];
      $datenaissp=$pere['datepere'];
    }
  }

  // declarant
  $declarant="SELECT iddeclarant, nomprenomdeclarant, numeroCNIdeclarant, datedelivranceCNIdeclarant,parenter FROM declarant WHERE iddeclarant=$iddeclarant";
  $declaran=mysqli_query($conn,$declarant);
  if (mysqli_num_rows($declaran) > 0){
        while ($infodeclarant=mysqli_fetch_assoc($declaran)) {
         $iddeclarant=$infodeclarant['iddeclarant'];
          $nomprenomdeclarant=$infodeclarant['nomprenomdeclarant'];
          $numeroCNIdeclarant=$infodeclarant['numeroCNIdeclarant'];
          $datedelivranceCNIdeclarant=$infodeclarant['datedelivranceCNIdeclarant'];
          $parenter=$infodeclarant['parenter'];
    }
        }
        // enfant
  $enfant="SELECT idenfant, nomenfant, prenomenfant, sexe, lieunaissanceenfant, datenaissanceenfant FROM enfant WHERE idenfant=$idenfant";

 $enfan=mysqli_query($conn,$enfant);
  if (mysqli_num_rows($enfan) > 0){
        while ($infoenfant=mysqli_fetch_assoc($enfan)) {
         $nomenfant=$infoenfant['nomenfant'];
          $prenomenfant=$infoenfant['prenomenfant'];
          $sexe=$infoenfant['sexe'];
          $lieunaissanceenfant=$infoenfant['lieunaissanceenfant'];
          $datenaissanceenfant=$infoenfant['datenaissanceenfant'];

    }
        }
        $temoin1="SELECT  nomprenomtemoin, professiontemoin, datenaisstemoin,lieunaisstemoin FROM temoin WHERE idtemoin=$idtemoin1";
        $temoin11=mysqli_query($conn,$temoin1);
        if (mysqli_num_rows($temoin11)>0) {
        	while ($row=mysqli_fetch_assoc($temoin11)) {
        		$nomprenomtemoin1=$row['nomprenomtemoin'];
        		$professiontemoin1=$row['professiontemoin'];
        		$datenaisstemoin1=$row['datenaisstemoin'];
        		$lieunaisstemoin1=$row['lieunaisstemoin'];
        	}
        	
        }

              $temoin2="SELECT  nomprenomtemoin, professiontemoin, datenaisstemoin,lieunaisstemoin FROM temoin WHERE idtemoin=$idtemoin2";
        $temoin22=mysqli_query($conn,$temoin2);
        if (mysqli_num_rows($temoin22)>0) {
        	while ($row=mysqli_fetch_assoc($temoin22)) {
        		$nomprenomtemoin2=$row['nomprenomtemoin'];
        		$professiontemoin2=$row['professiontemoin'];
        		$datenaisstemoin2=$row['datenaisstemoin'];
        		$lieunaisstemoin2=$row['lieunaisstemoin'];
        	}
        	
        }


 ?>


<?php
include ('fpdf.php');

class PDF extends FPDF
{
// En-tête
	function Header()
	{
    //MENTION DE LA REPUBLIQUE EN ANGLAIS ET EN FRANCAIS

		$this->SetX(95);
		$this->SetFont('Times','B',8);
		$this->Write(5,'REPUBLIQUE DU CAMEROUN');//EN FRANCAIS
		$this->ln();
		$this->SetX(100);
		$this->SetFont('Times','B',6);
		$this->Write(5,'Paix-Travail-Patrie');
		$this->ln();
		$this->SetX(95);
		

    // INFORMATION CONCERNANT LE CENTRE D ETAT CIVIL
		$this->SetFont('Times','B',8);
		$this->SetXY(5,0);
    // REGION,DEPARTEMENT,ARRONDISSEMENT
		$this->Write(5,'PROVINCE:OUEST');
		$this->ln();
		$this->SetFont('Times','B',8);
		$this->SetX(5);
		$this->SetFont('Times','B',8);
		$this->Write(5,'DEPARTEMENT:MIFI');
		$this->ln();
		$this->SetX(5);
		$this->Write(5,'COMMUNE:BAFOUSSAM 1er');
		//TITRE DU CENTRE D ETAT CIVIL
		$this->SetXY(100,15);
		$this->SetFont('Times','I',20);
		$this->Write(5,"no.../...");
		
		
		
		
		
		$this->SetXY(30,30);
		$this->SetFont('Times','b',12);
		
		$this->Write(5,"ACTE DE RECONNAISSANCE D'ENFANT");
		
		$this->SetXY(50,35);
		$this->write(5," NE HORS MARIAGE");

    
	}


// Pied de page
 	function Footer()
  {
  	// temoin1
  	$this->SetXY(17,180);
$this->SetFont('Times','b',12);
$this->write(5,"signature");

$this->SetXY(17,185);
$this->SetFont('Times','',10);
$this->write(5,"1 er temoin");

$this->SetXY(17,190);
$this->SetFont('Times','',10);
$this->write(5,"...................");
// temoin 2



$this->SetXY(17,195);
$this->SetFont('Times','',10);
$this->write(5,"2 eme temoin");

$this->SetXY(17,200);
$this->SetFont('Times','',10);
$this->write(5,"...................");

// pere de l enfant

$this->SetXY(60,184);
$this->SetFont('Times','',10);
$this->write(5,"pere de l'enfant  ...................................");
// signature de la mere

$this->SetXY(60,192);
$this->SetFont('Times','',10);
$this->write(5,"mere de l'enfant  ...................................");


// signature de l officier d etat civil

$this->SetXY(60,199);
$this->SetFont('Times','',10);
$this->write(5,"officier d'etat civil  ...................................");
}
	
}

$pdf = new PDF();
$pdf->SetTopMargin(1);
$pdf->AddPage('P','A5',0);
// information de l enfant


$pdf->SetXY(17,42);
$pdf->SetFont('Times','',10);
$pdf->Write(5,'Le');

$pdf->SetFont('Times','b',10);
$pdf->SetXY(35,42);
$pdf->write(5,"nya'abe");
$pdf->SetXY(23,42);
$pdf->SetFont('Times','',10);
$pdf->write(5,"....................................................................................................");

$pdf->SetXY(17,48);
$pdf->SetFont('Times','',10);
$pdf->Write(5,'On comparu par devant nous');
$pdf->SetXY(65,47);
$pdf->SetFont('Times','b',10);
$pdf->write(5,"wafo pierre");
$pdf->SetXY(61,48);
$pdf->SetFont('Times','',10);
$pdf->write(5,"........................................................");

$pdf->SetXY(17,53);
$pdf->SetFont('Times','',10);
$pdf->Write(5,"Officier du centre d'etat civil:");
$pdf->SetXY(60,53);
$pdf->SetFont('Times','b',10);
$pdf->write(5,"akonolinga");
$pdf->SetXY(60,54);
$pdf->SetFont('Times','',10);
$pdf->write(5,".........................................................");

$pdf->SetXY(17,58);
$pdf->SetFont('Times','',10);
$pdf->Write(5,'Le nomme:');

$pdf->SetFont('Times','b',10);
$pdf->SetXY(35,58);
$pdf->write(5,"$nompere");
$pdf->SetXY(35,59);
$pdf->SetFont('Times','',10);
$pdf->write(5,"....................................................................................");


$pdf->SetXY(17,63);
$pdf->SetFont('Times','',10);
$pdf->Write(5,'Ne le:');

$pdf->SetFont('Times','b',10);
$pdf->SetXY(30,63);
$pdf->Write(5,"$datenaissp");
$pdf->SetXY(25,64);
$pdf->SetFont('Times','',10);
$pdf->write(5,".......................................",);
$pdf->SetXY(60,63);
$pdf->Write(5,"a");
$pdf->SetFont('Times','b',10);
$pdf->SetXY(65,63);
$pdf->write(5,"$lieunaissp");
$pdf->SetFont('Times','',10);
$pdf->SetXY(63,64);
$pdf->write(5,"..........................");
$pdf->SetFont('Times','',10);
$pdf->SetXY(88,63);
$pdf->write(5,"pere de l'enfant");

// information du pere

$pdf->SetXY(17,68);
$pdf->SetFont('Times','',10);
$pdf->Write(5,'Exercant la profession de:');

$pdf->SetFont('Times','b',10);
$pdf->SetXY(58,68);
$pdf->write(5,"$professionpere");
$pdf->SetXY(55,69);
$pdf->SetFont('Times','',10);
$pdf->write(5,".............................................................");


$pdf->SetXY(17,72);
$pdf->SetFont('Times','',10);
$pdf->Write(5,"qui declare etre le pere naturel de l'enfant ");

$pdf->SetFont('Times','b',10);
$pdf->SetXY(23,77);
$pdf->write(5,"$nomenfant");
$pdf->SetXY(17,78);
$pdf->SetFont('Times','',10);
$pdf->write(5,"........................................................................................................");



$pdf->SetXY(17,82);
$pdf->SetFont('Times','',10);
$pdf->Write(5,'De sexe:');

$pdf->SetFont('Times','b',10);
$pdf->SetXY(32,82);
$pdf->Write(5,"$sexe");
$pdf->SetXY(32,83);
$pdf->SetFont('Times','',10);
$pdf->write(5,".................");
$pdf->SetXY(48,82);
$pdf->Write(5,"Ne(e) le:");
$pdf->SetFont('Times','b',10);
$pdf->SetXY(65,82);
$pdf->write(5,"$datenaissanceenfant");
$pdf->SetFont('Times','',10);
$pdf->SetXY(65,83);
$pdf->write(5,"..........................");

 


$pdf->SetXY(17,87);
$pdf->SetFont('Times','',10);
$pdf->Write(5,'a:');

$pdf->SetXY(25,87);
$pdf->write(5,"$lieunaissanceenfant");
$pdf->SetXY(20,88);
$pdf->SetFont('Times','',10);
$pdf->write(5,".............................................................................");
$pdf->SetFont('Times','',10);
$pdf->SetXY(90,87);
$pdf->write(5,"hors mariage");

// information de la mere
$pdf->SetXY(17,92);
$pdf->SetFont('Times','',10);
$pdf->Write(5,'En presence de la nomme:');
$pdf->SetXY(60,92);
$pdf->SetFont('Times','b',10);

$pdf->write(5,"$nommere");
$pdf->SetXY(55,93);
$pdf->SetFont('Times','',10);
$pdf->write(5,".......................................................");





$pdf->SetXY(17,97);
$pdf->SetFont('Times','',10);
$pdf->Write(5,'Ne le:');

$pdf->SetFont('Times','b',10);
$pdf->SetXY(30,97);
$pdf->Write(5,"$datenaissm");
$pdf->SetXY(40,98);
$pdf->SetFont('Times','',10);
$pdf->WRITE(5,".......................................");
$pdf->SetXY(17,102);
$pdf->Write(5,"a");
$pdf->SetFont('Times','b',10);
$pdf->SetXY(30,102);
$pdf->write(5,"$lieunaissm");
$pdf->SetFont('Times','',10);
$pdf->SetXY(20,103);
$pdf->write(5,"...............................................................................");
$pdf->SetFont('Times','',10);
$pdf->SetXY(88,102);
$pdf->write(5,"mere de l'enfant");

// information du mere

$pdf->SetXY(17,107);
$pdf->SetFont('Times','',10);
$pdf->Write(5,'Exercant la profession de:');

$pdf->SetFont('Times','b',10);
$pdf->SetXY(58,107);
$pdf->write(5,"$professionmere");
$pdf->SetXY(55,108);
$pdf->SetFont('Times','',10);
$pdf->write(5,".............................................................");



$pdf->SetXY(17,112);
$pdf->write(5,"qui declare son enfant susnomme(e) a ete concu(e) des ouevres du");
$pdf->SetXY(17,117);
$pdf->SetFont('Times','',10);
$pdf->write(5,"declarant,et qu'elle accepte librement la reconnaissance dudit enfant");
$pdf->SetXY(17,122);
$pdf->SetFont('Times','',10);
$pdf->write(5,"par son pere naturel.");

$pdf->SetXY(17,127);
$pdf->SetFont('Times','',10);
$pdf->write(5,"qui on confirme ces declarations.");

// temoin1
$pdf->SetXY(17,132);
$pdf->SetFont('Times','',10);
$pdf->write(5,"1 er temoin");
$pdf->SetXY(40,132);
$pdf->SetFont('Times','b',10);
$pdf->write(5,"$nomprenomtemoin1");
$pdf->SetXY(35,133);
$pdf->SetFont('Times','',10);
$pdf->write(5,"....................................................................................");

$pdf->SetXY(17,137);
$pdf->SetFont('Times','',10);
$pdf->write(5,"ne(e) le");
$pdf->SetXY(40,137);
$pdf->SetFont('Times','b',10);
$pdf->write(5,"$datenaisstemoin1");
$pdf->SetXY(35,138);
$pdf->SetFont('Times','',10);
$pdf->write(5,"............................................");

$pdf->SetXY(75,137);
$pdf->SetFont('Times','',10);
$pdf->write(5,"a");
$pdf->SetXY(80,137);
$pdf->SetFont('Times','b',10);
$pdf->write(5,"$lieunaisstemoin1");
$pdf->SetXY(80,138);
$pdf->SetFont('Times','',10);
$pdf->write(5,".................................");

$pdf->SetXY(17,142);
$pdf->SetFont('Times','',10);
$pdf->write(5,"profession");
$pdf->SetXY(40,142);
$pdf->SetFont('Times','b',10);
$pdf->write(5,"$professiontemoin1");
$pdf->SetXY(35,143);
$pdf->SetFont('Times','',10);
$pdf->write(5,"....................................................................................");

// temoin2

$pdf->SetXY(17,147);
$pdf->SetFont('Times','',10);
$pdf->write(5,"2 eme temoin");
$pdf->SetXY(40,147);
$pdf->SetFont('Times','b',10);
$pdf->write(5,"$nomprenomtemoin2");
$pdf->SetXY(35,148);
$pdf->SetFont('Times','',10);
$pdf->write(5,"....................................................................................");

$pdf->SetXY(17,152);
$pdf->SetFont('Times','',10);
$pdf->write(5,"ne(e) le");
$pdf->SetXY(40,152);
$pdf->SetFont('Times','b',10);
$pdf->write(5,"$datenaisstemoin2");
$pdf->SetXY(35,153);
$pdf->SetFont('Times','',10);
$pdf->write(5,"............................................");

$pdf->SetXY(75,152);
$pdf->SetFont('Times','',10);
$pdf->write(5,"a");
$pdf->SetXY(80,152);
$pdf->SetFont('Times','b',10);
$pdf->write(5,"$lieunaisstemoin2");
$pdf->SetXY(80,153);
$pdf->SetFont('Times','',10);
$pdf->write(5,".................................");

$pdf->SetXY(17,157);
$pdf->SetFont('Times','',10);
$pdf->write(5,"profession");
$pdf->SetXY(40,157);
$pdf->SetFont('Times','b',10);
$pdf->write(5,"$professiontemoin2");
$pdf->SetXY(35,158);
$pdf->SetFont('Times','',10);
$pdf->write(5,"....................................................................................");

// commentaire sur la loi

$pdf->SetXY(17,161);
$pdf->SetFont('Times','',10);
$pdf->write(5,"En foi de quoi les declarations sont recues et enregistrees conforme");
$pdf->SetXY(17,164);
$pdf->SetFont('Times','',10);
$pdf->write(5,"ment aux dispositions de l'article 44 de l'ordonnance no 82/02 du 29");
$pdf->SetXY(17,167);
$pdf->SetFont('Times','',10);
$pdf->write(5,"juin 1981 portant organisation de l'etat civil et diverses dispositions");
$pdf->SetXY(17,170);
$pdf->SetFont('Times','',10);
$pdf->write(5,"relative a l'etat des personne physique en presence des parties et temoins");
$pdf->SetXY(17,173);
$pdf->SetFont('Times','',10);
$pdf->write(5,"cette declaration sera annexee et/ou citee en reference du registre des actes");
$pdf->SetXY(17,176);
$pdf->SetFont('Times','',10);
$pdf->write(5,"de naissnce a la souche de l'acte de naissnce de l'enfant");
// signature



//signature du secretaire d etat civile








// fonction qui permet de charger l acte de naissance dans le disque dur
$pdf->Output("moi.pdf","I");
?>
<?php  
 }else{
        header("location: ../loginof/logout.php");
           exit();
    }
?>