
<?php 
  session_start();
  if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
  
  $iddeclaration=$_REQUEST['acte'];

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

                      $datedeclaration =$row['Datedeclaration'];
                      $idenfant = $row['idenfant'];
                      $iddeclarant = $row['iddeclarant'];

                      
              
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

 ?>




<?php
include ('fpdf.php');

class PDF extends FPDF
{
// En-tête
	function Header()
	{
    //MENTION DE LA REPUBLIQUE EN ANGLAIS ET EN FRANCAIS

		$this->SetXY(10,1);
		$this->SetFont('Times','B',13);
		$this->Write(5,'REPUBLIQUE DU CAMEROUN');//EN FRANCAIS
		$this->ln();
		$this->SetXY(25,5);
		$this->SetFont('Times','',12);
		$this->Write(5,'Paix   -  Travail -  Patrie');
		// region
		$this->ln();
		$this->SetXY(25,11);
		$this->SetFont('Times','B',13);
		$this->Write(5,'REGION');
		$this->ln();
		$this->SetXY(30,15);
		$this->SetFont('Times','I',10);
		$this->Write(5,"ouest");    
		// region

		// departement
		$this->ln();
		$this->SetXY(15,20);
		$this->SetFont('Times','B',13);
		$this->Write(5,'DEPARTEMENT');
		$this->ln();
		$this->SetXY(30,25);
		$this->SetFont('Times','I',12);
		$this->Write(5,'mifi');
		// arrondissement
		$this->ln();
		$this->SetXY(15,30);
		$this->SetFont('Times','B',13);
		$this->Write(5,'ARRONDISSEMENT');
		$this->ln();
		$this->SetXY(30,35);
		$this->SetFont('Times','I',12);
		$this->Write(5,'Bafoussam 1');
		// mention republique en anglais

		$this->SetXY(120,1);
		$this->SetFont('Times','B',13);
		$this->Write(5,'REPUBLIQUE OF CAMEROON');
		$this->SetXY(132,5);
		$this->SetFont('Times','',12);
		$this->Write(5,'   Peace - Work  - Fatherland');
				
		$this->SetXY(155,10);
		$this->SetFont('Times','B',13);
		$this->Write(5,'REGION');
		$this->ln();
		$this->SetXY(160,15);
		$this->SetFont('Times','I',10);

		$this->Write(5,'Ouest');
		// departement
		$this->ln();
		$this->SetXY(154,20);
		$this->SetFont('Times','B',13);
		$this->Write(5,'DIVISION');
		$this->ln();
		$this->SetXY(160,25);
		$this->SetFont('Times','I',10);
		$this->Write(5,'Mifi');
		// arrondissement
		$this->ln();
		$this->SetXY(153,30);
		$this->SetFont('Times','B',13);
		$this->Write(5,'SUBDIVISION');
		$this->ln();
		$this->SetXY(160,35);
		$this->SetFont('Times','I',10);
		$this->Write(5,'Bafoussam 1');
		$this->SetAuthor("daknaiss",true);
		// CENTRE D ETAT CIVIL/CIVIL STATUT REGISTER
		$this->ln();
		$this->SetXY(40,42);
		$this->SetFont('Times','B',12);
		$this->Write(5,"CENTRE D'ETAT CIVIL /");
		$this->SetXY(90,42);
		$this->SetFont('Times','I',12);
		$this->Write(5,"CIVIL STATUS REGISTRATION CENTRE");

		$this->ln();
		$this->SetXY(40,47);
		$this->SetFont('Times','b',12);
		$this->Write(5,"de");
				$this->SetFont('Times','I',12);
		$this->Write(5,"  -of      Commune de Bafoussam 1 er");
				$this->SetXY(55,48);
		$this->SetFont('Times','',12);
		$this->Write(5," ....................................................................................................................");


		// information de l acte de naissance
		
		$this->ln();
		$this->SetXY(40,53);
		$this->SetFont('Times','B',12);
		$this->Write(5,"Centre d etat civil de rattachement");
		$this->SetXY(101,53);
		$this->SetFont('Times','I',12);
		$this->Write(5,"  (pour les centre secondaires)");
		
		$this->ln();
		$this->SetXY(40,58);
		$this->Write(5,"Main Civil Status Registry of Attachemment ( for secondary civil Status registry)");
		$this->ln();
		$this->SetXY(45,63);
		$this->SetFont('Times','B',12);
		$this->Write(5,"centre secondaire d etat civil de ndiengso 2");
				$this->SetXY(40,64);
		$this->Write(5,"....................................................................................................................................");
		$this->ln();
		$this->SetXY(40,71);
		$this->SetFont('Times','B',18);
		$this->Write(5,"ACTE DE NAISSANCE  /");
		$this->SetXY(110,71);
		$this->SetFont('Times','I',18);
		$this->Write(5,"  BIRTH CERTIFICATE");
		$this->SetFont('Times','B',13);
		$this->SetXY(50,78);
		$this->Write(5,"No :");
		$this->SetXY(60,78);
		$this->Write(5,"/2023/OU0128/N/5555/");
		$this->SetXY(60,79);
		$this->Write(5,"....................................");
		



	
		
		
	

    
	}


// Pied de page
 	function Footer()
 {
 

 
 $this->SetXY(17,270);
 $this->SetFont('Times','',12);
 $this->Write(5,"le secretaire d'etat civil");
 $this->SetXY(30,272);
 $this->SetFont('Times','',12);
 $this->Write(5,'secretary');
 
$this->SetXY(120,272);
 $this->SetFont('Times','',12);
 $this->Write(5,"signature de l'officier d'etat civile");
 $this->SetFont('Times','',12);
 $this->SetXY(120,275);
 $this->Write(5,"signature of civil Status Registrar");
}
	
}

$pdf = new PDF();
$pdf->SetTopMargin(1);
$pdf->AddPage('P','A4',0);
// information de l enfant
// nom de l enfant
$pdf->SetXY(17,89);
$pdf->SetFont('Times','b',12);
$pdf->write(5,"Nom de l'enfant:");
$pdf->SetXY(17,92);
$pdf->SetFont('Times','',12);
$pdf->Write(5,'Surname of the child');

$pdf->SetFont('Times','i',12);
$pdf->SetXY(55,90);
$pdf->Cell(5,0,$nomenfant,0,0,'L',false);
$pdf->SetXY(50,90);

$pdf->SetFont('Times','',10);
$pdf->write(5,"...............................................................................................................................................");

// prenom de l enfant

$pdf->SetXY(17,96);
$pdf->SetFont('Times','b',12);
$pdf->Write(5,"Prenom de  l'enfant :");
$pdf->SetXY(17,99);
$pdf->SetFont('Times','',12);
$pdf->Write(5,'Given name of the child');
$pdf->SetXY(60,96);
$pdf->SetFont('Times','i',12);
$pdf->Write(5,"$prenomenfant");
$pdf->SetXY(55,97);
$pdf->SetFont('Times','',10);
$pdf->write(5,"..........................................................................................................................................");
// date de naissance de l enfant
$pdf->ln();
$pdf->SetXY(17,102);
$pdf->SetFont('Times','b',12);
$pdf->Write(5,"Ne Le - :");
$pdf->SetXY(30,102);
$pdf->SetFont('Times','',12);
$pdf->Write(5,'Born at ');
$pdf->SetXY(58,102);
$pdf->SetFont('Times','i',12);
$pdf->Write(5,"$datenaissanceenfant");
$pdf->SetXY(45,103);
$pdf->SetFont('Times','',10);
$pdf->write(5,"......................................................................................................................................................");
// lieu de naissance de enfant

$pdf->ln();
$pdf->SetXY(17,108);
$pdf->SetFont('Times','b',12);
$pdf->Write(5,"A - ");
$pdf->SetXY(30,108);
$pdf->SetFont('Times','',12);
$pdf->Write(5,'AT ');
$pdf->SetXY(55,108);
$pdf->SetFont('Times','i',12);
$pdf->Write(5,"$lieunaissanceenfant");
$pdf->SetXY(40,109);
$pdf->SetFont('Times','',10);
$pdf->write(5,"...........................................................................................................................................................");

// sexe de l enfant

$pdf->ln();
$pdf->SetXY(17,113);
$pdf->SetFont('Times','b',12);
$pdf->Write(5,"De sexe ");
$pdf->SetXY(30,113);
$pdf->SetFont('Times','',12);
$pdf->Write(5,' - Sex ');
$pdf->SetXY(55,113);
$pdf->SetFont('Times','i',12);
$pdf->Write(5,"$sexe");
$pdf->SetXY(40,114);
$pdf->SetFont('Times','',10);
$pdf->write(5,"...........................................................................................................................................................");
// information du pere
// nom complet du pere

$pdf->ln();
$pdf->SetXY(17,118);
$pdf->SetFont('Times','b',12);
$pdf->Write(5,"De - ");
$pdf->SetXY(30,118);
$pdf->SetFont('Times','',12);
$pdf->Write(5,'of ');
$pdf->SetXY(50,118);
$pdf->SetFont('Times','i',12);
$pdf->Write(5,"$nompere");
$pdf->SetXY(37,119);
$pdf->SetFont('Times','',10);
$pdf->write(5,"...............................................................................................................................................................");
// lieu de naissance du pere


$pdf->ln();
$pdf->SetXY(17,123);
$pdf->SetFont('Times','b',12);
$pdf->Write(5,"Ne a - ");
$pdf->SetXY(30,123);
$pdf->SetFont('Times','',12);
$pdf->Write(5,'Born at ');
$pdf->SetXY(55,123);
$pdf->SetFont('Times','i',12);
$pdf->Write(5,"$lieunaissp");
$pdf->SetXY(45,124);
$pdf->SetFont('Times','',10);
$pdf->write(5,"......................................................................................................................................................");



// date de naissance du pere
$pdf->SetXY(17,128);
$pdf->SetFont('Times','b',12);
$pdf->Write(5,"Le - ");
$pdf->SetXY(30,128);
$pdf->SetFont('Times','',12);
$pdf->Write(5,'On the ');
$pdf->SetXY(55,128);
$pdf->SetFont('Times','i',12);
$pdf->Write(5,"$datenaissp");
$pdf->SetXY(45,129);
$pdf->SetFont('Times','',10);
$pdf->write(5,"......................................................................................................................................................");



// domicile du pere
$pdf->SetXY(17,133);
$pdf->SetFont('Times','b',12);
$pdf->Write(5,"Domicilie a - ");
$pdf->SetXY(38,133);
$pdf->SetFont('Times','',12);
$pdf->Write(5,' Resident at');
$pdf->SetXY(62,133);
$pdf->SetFont('Times','i',12);
$pdf->Write(5,"$domicilepere");
$pdf->SetXY(59,134);
$pdf->SetFont('Times','',10);
$pdf->write(5,".....................................................................................................................................");



// profession du pere
$pdf->SetXY(17,138);
$pdf->SetFont('Times','b',12);
$pdf->Write(5,"profession - ");
$pdf->SetXY(38,138);
$pdf->SetFont('Times','',12);
$pdf->Write(5,'Occupation ');
$pdf->SetXY(62,138);
$pdf->SetFont('Times','i',12);
$pdf->Write(5,"$professionpere");
$pdf->SetXY(58,139);
$pdf->SetFont('Times','',10);
$pdf->write(5,"......................................................................................................................................");
// nationalite du pere


$pdf->SetXY(17,143);
$pdf->SetFont('Times','b',12);
$pdf->Write(5,"Nationalite - :");
$pdf->SetXY(40,143);
$pdf->SetFont('Times','',12);
$pdf->Write(5,'Nationality ');
$pdf->SetXY(62,143);
$pdf->SetFont('Times','i',12);
$pdf->Write(5,"$natpere");
$pdf->SetXY(59,144);
$pdf->SetFont('Times','',10);
$pdf->write(5,".....................................................................................................................................");
// reference des document fourni par le pere


$pdf->ln();
$pdf->SetXY(17,148);
$pdf->SetFont('Times','b',12);
$pdf->Write(5,"Document de Reference -");
$pdf->SetXY(62,148);
$pdf->SetFont('Times','',12);
$pdf->Write(5,'Reference document');
$pdf->SetXY(100,148);
$pdf->SetFont('Times','i',12);
$pdf->Write(5,"$numerodocpere");
$pdf->SetXY(100,149);
$pdf->SetFont('Times','',10);
$pdf->write(5,"......................................................................................");

$pdf->SetXY(17,151);
$pdf->SetFont('Times','',12);
$pdf->write(5,"(Numero de la carte national d'identite ou Reference de l' acte de naissnce ou reference ");

$pdf->SetXY(17,156);
$pdf->write(5,"du document prouvant la  Nationalite)");
$pdf->SetXY(17,161);
$pdf->SetFont('Times','',12);
$pdf->write(5,"(national identity card ou Reference of the birth certificate ou reference");

$pdf->SetXY(17,166);
$pdf->write(5," of the document attesting the  Nationality)");

// information de la mere
// non de la mere


$pdf->SetXY(17,171);
$pdf->SetFont('Times','b',12);
$pdf->Write(5," Et De - ");
$pdf->SetXY(30,171);
$pdf->SetFont('Times','',12);
$pdf->Write(5,' And of ');
$pdf->SetXY(55,171);
$pdf->SetFont('Times','i',12);
$pdf->Write(5,"$nommere");
$pdf->SetXY(45,172);
$pdf->SetFont('Times','',10);
$pdf->write(5,"....................................................................................................................................................");
// lieu de naissance de la mere



$pdf->SetXY(17,176);
$pdf->SetFont('Times','b',12);
$pdf->Write(5,"Ne a - ");
$pdf->SetXY(30,176);
$pdf->SetFont('Times','',12);
$pdf->Write(5,'Born at ');
$pdf->SetXY(55,176);
$pdf->SetFont('Times','i',12);
$pdf->Write(5,"$lieunaissm");
$pdf->SetXY(45,177);
$pdf->SetFont('Times','',10);
$pdf->write(5,"....................................................................................................................................................");
// date de naissance de la mere


$pdf->SetXY(17,181);
$pdf->SetFont('Times','b',12);
$pdf->Write(5,"Le - ");
$pdf->SetXY(30,181);
$pdf->SetFont('Times','',12);
$pdf->Write(5,'On the ');
$pdf->SetXY(55,181);
$pdf->SetFont('Times','i',12);
$pdf->Write(5,"$datenaissm");
$pdf->SetXY(45,182);
$pdf->SetFont('Times','',10);
$pdf->write(5,"....................................................................................................................................................");



// domicile de la mere
$pdf->SetXY(17,186);
$pdf->SetFont('Times','b',12);
$pdf->Write(5,"Domicilie a - ");
$pdf->SetXY(38,186);
$pdf->SetFont('Times','',12);
$pdf->Write(5,' Resident at');
$pdf->SetXY(62,186);
$pdf->SetFont('Times','i',12);
$pdf->Write(5,"$domicilemere");
$pdf->SetXY(59,187);
$pdf->SetFont('Times','',10);
$pdf->write(5,".....................................................................................................................................");



// prefession de la mere
$pdf->SetXY(17,191);
$pdf->SetFont('Times','b',12);
$pdf->Write(5,"profession - ");
$pdf->SetXY(38,191);
$pdf->SetFont('Times','',12);
$pdf->Write(5,'Occupation ');
$pdf->SetXY(62,191);
$pdf->SetFont('Times','i',12);
$pdf->Write(5,"$professionmere");
$pdf->SetXY(58,192);
$pdf->SetFont('Times','',10);
$pdf->write(5,"......................................................................................................................................");

// nationalite de la mere


$pdf->SetXY(17,196);
$pdf->SetFont('Times','b',12);
$pdf->Write(5,"Nationalite - :");
$pdf->SetXY(40,196);
$pdf->SetFont('Times','',12);
$pdf->Write(5,'Nationality ');
$pdf->SetXY(62,196);
$pdf->SetFont('Times','i',12);
$pdf->Write(5,"$natmere");
$pdf->SetXY(59,197);
$pdf->SetFont('Times','',10);
$pdf->write(5,".....................................................................................................................................");
// document de referenece de la mere


$pdf->SetXY(17,201);
$pdf->SetFont('Times','b',12);
$pdf->Write(5,"Document de Reference -");
$pdf->SetXY(62,201);
$pdf->SetFont('Times','',12);
$pdf->Write(5,'Reference document');
$pdf->SetXY(100,201);
$pdf->SetFont('Times','i',12);
$pdf->Write(5,"$numerodocmere");
$pdf->SetXY(100,202);
$pdf->SetFont('Times','',10);
$pdf->write(5,"......................................................................................");
// text indicatif

$pdf->SetXY(17,206);
$pdf->SetFont('Times','',12);
$pdf->write(5,"(Numero de la carte national d'identite ou Reference de l' acte de naissnce ou reference ");

$pdf->SetXY(17,209);
$pdf->write(5,"du document prouvant la  Nationalite)");
$pdf->SetXY(17,212);
$pdf->SetFont('Times','',12);
$pdf->write(5,"(national identity card ou Reference of the birth certificate ou reference");

$pdf->SetXY(17,215);
$pdf->write(5," of the document attesting the  Nationality)");

// information du declarant

$pdf->ln();
$pdf->SetXY(17,220);
$pdf->SetFont('Times','b',12);
$pdf->Write(5,"Dresse le - ");
$pdf->SetXY(38,220);
$pdf->SetFont('Times','',12);
$pdf->Write(5,'Drawn up on the');
$pdf->SetXY(68,220);
$pdf->SetFont('Times','i',12);
$pdf->Write(5,"akonolinga");
$pdf->SetXY(68,221);
$pdf->SetFont('Times','',10);
$pdf->write(5,"..........................................................................................................................");

$pdf->ln();
$pdf->SetXY(17,225);
$pdf->SetFont('Times','b',12);
$pdf->Write(5,"Sur la declaration de - ");
$pdf->SetXY(57,225);
$pdf->SetFont('Times','',12);
$pdf->Write(5,' in accordance white the declaration of');
$pdf->SetXY(125,225);
$pdf->SetFont('Times','i',12);
$pdf->Write(5,"$nomprenomdeclarant");
$pdf->SetXY(125,226);
$pdf->SetFont('Times','',10);
$pdf->write(5,"..........................................................");
// statut du declarant mention
$pdf->SetXY(30,231);
$pdf->SetFont('Times','b',12);
$pdf->write(5,"$parenter");

$pdf->SetXY(17,232);
$pdf->SetFont('Times','',10);
$pdf->write(5,"....................................................................................................................................................................................");

$pdf->SetXY(17,236);
$pdf->SetFont('Times','b',12);
$pdf->Write(5,"Lesquels ont certifie la sincerite  de la presente declaration");
$pdf->SetXY(17,240);
$pdf->SetFont('Times','',12);
$pdf->Write(5,'Who attested to the truth on this declaration ');
// certifiaction
// les officier qui on etablie l acte

$pdf->SetXY(17,245);
$pdf->SetFont('Times','b',12);
$pdf->Write(5," Par nous -");
$pdf->SetXY(38,245);
$pdf->SetFont('Times','',12);
$pdf->Write(5,'by us :');
$pdf->SetXY(60,245);
$pdf->SetFont('Times','',12);
$pdf->Write(5,'Mme kamga');
$pdf->SetXY(50,246);
$pdf->SetFont('Times','',12);
$pdf->Write(5,' .................................................................................................');
$pdf->SetXY(160,246);
$pdf->SetFont('Times','b',12);
$pdf->Write(5,'officier ');

$pdf->SetXY(17,250);
$pdf->SetFont('Times','b',12);
$pdf->Write(5," d' etat civil -");
$pdf->SetXY(40,250);
$pdf->SetFont('Times','',12);
$pdf->Write(5,'civil status registrar:');

// assistant
$pdf->SetXY(17,255);
$pdf->SetFont('Times','b',12);
$pdf->Write(5," assiste de -");
$pdf->SetXY(38,255);
$pdf->SetFont('Times','',12);
$pdf->Write(5,'In presence of :');
$pdf->SetXY(65,255);
$pdf->SetFont('Times','',12);
$pdf->Write(5,'Mme secretaire');
$pdf->SetXY(65,255);
$pdf->SetFont('Times','',12);
$pdf->Write(5,"...................................................................................");
$pdf->SetXY(160,255);
$pdf->SetFont('Times','b',12);
$pdf->Write(5,'secretaire ');

$pdf->SetXY(17,258);
$pdf->SetFont('Times','b',12);
$pdf->Write(5," d' etat civil -");
$pdf->SetXY(45,258);
$pdf->SetFont('Times','',12);
$pdf->Write(5,'secretary');
// la date d etablissement

$pdf->SetXY(40,262);
$pdf->SetFont('Times','b',12);
$pdf->Write(5," Le -");
$pdf->SetXY(50,262);
$pdf->SetFont('Times','',12);
$pdf->Write(5,'on :');
$pdf->SetXY(65,262);
$pdf->SetFont('Times','',12);
$pdf->Write(5,'');
$pdf->SetXY(65,263);
$pdf->SetFont('Times','',12);
$pdf->Write(5,"...................................................................................");



// fonction qui permet de charger l acte de naissance dans le disque dur
$pdf->Output("acte de naissnce.pdf","I");


 
?>
<?php 
    }else{
        header("location: ../loginof/logout.php");
           exit();
    }


 ?>
