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
		
		$this->SetFont('Times','B',8);
		$this->Write(5,'REPUBLIC OF CAMEROUN');// EN ANGLAIS
		$this->ln();
		$this->SetX(100);
		$this->SetFont('Times','B',6);
		$this->Write(5,'Peace-Work-Fatherland');
		$this->ln();
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
		$this->Write(5,'ARRONDISSEMENT:BAFOUSSAM 1er');
		//TITRE DU CENTRE D ETAT CIVIL
		$this->ln(7);
		$this->SetX(60);
		$this->SetFont('Times','I',10);
		$this->Write(5,"CENTRE D'ETAT CIVIL");
		$this->ln();
		$this->SetX(48);
		$this->Write(5,"CIVIL STATUS REGISTRATION OUEST");
		$this->ln();
		$this->SetFont('Times','b',10);
		$this->SetX(25);
		$this->Write(5,"    DE-OF BAFOUSSAM-VILLE");
		$this->ln(5);
		$this->SetFont('Times','b',17);
		$this->SetX(5);
		$this->Write(5,"ACTE DE NAISSANCE");

		$this->ln();
		$this->SetX(5);
		$this->Write(5,"BIRTH CERTIFICATE");
		$this->ln();
		$this->SetX(100);
		$this->SetFont('Times','U',10);

		$this->Write(5,"no.../...");
		$this->ln();
		
		

    
	}


// Pied de page
 	function Footer()
 {
 $this->ln(5);
 $this->SetFont('Times','b',10);
 $this->Write(5,"secretaire d'etat civil.");
 $this->ln(2.5);
 $this->SetFont('Times','',8);
 $this->Write(5,'civil status registrar.');

 $this->ln(5);
 $this->SetX(25);
 $this->SetFont('Times','',10);
 $this->Write(5,'le secretaire');
 $this->ln(2);
 $this->SetX(25);
 $this->SetFont('Times','b',8);
 $this->Write(5,'secretary');
 $this->ln(5);

 $this->SetFont('Times','',10);
 $this->SetXY(70,185);
 $this->Write(5,"signature de l'officier d'etat civile");
 $this->ln(2);
 $this->SetFont('Times','',8);
 $this->SetXY(70,188);
 $this->Write(5,"signature of civil Status registrar");
}
	
}

$pdf = new PDF();
$pdf->SetTopMargin(1);
$pdf->AddPage('P','A5',0);
// information de l enfant



$pdf->SetFont('Times','',10);
$pdf->Write(5,'non de l enfant');
$pdf->ln(2.5);
$pdf->SetFont('Times','',8);
$pdf->Write(5,'Name of the child');
$pdf->SetFont('Times','b',10);
$pdf->SetXY(35,50);
$pdf->Cell(5,0,"nya'abe",0,0,'L',false);
$pdf->SetXY(75,51);
$pdf->SetFont('Times','',10);
$pdf->Cell(5,0,"..................................................................................................",0,0,'C',true);

$pdf->ln(5);
$pdf->SetFont('Times','b',10);
$pdf->Write(5,'Le-');
$pdf->SetXY(40,58);
$pdf->Cell(30,0,"deux fevrier mil neuf cent quatre vingt dix neuf",0,0,'C',true);
$pdf->SetXY(60,59);
$pdf->SetFont('Times','',10);
$pdf->Cell(5,0,"..................................................................................................",0,0,'C',true);

$pdf->ln(2);
$pdf->SetFont('Times','',10);
$pdf->Write(5,'est ne a');
$pdf->ln(2.5);
$pdf->SetFont('Times','',8);
$pdf->Write(5,'was born at');
$pdf->SetFont('Times','b',10);
$pdf->SetXY(25,63);
$pdf->Cell(30,0,"akonolinga",0,0,'L',true);
$pdf->SetXY(65,64);
$pdf->SetFont('Times','',10);
$pdf->Cell(5,0,"..................................................................................................",0,0,'C',true);

$pdf->ln(4);
$pdf->SetFont('Times','',10);
$pdf->Write(5,'Nom de l enfant');
$pdf->ln(2.5);
$pdf->SetFont('Times','',8);
$pdf->Write(5,'Name of the child');
$pdf->SetFont('Times','b',10);
$pdf->SetXY(35,70);
$pdf->Cell(5,0,"nya'abe stephane",0,0,'L',true);
$pdf->SetXY(75,71);
$pdf->SetFont('Times','',10);
$pdf->Cell(5,0,"..................................................................................................",0,0,'C',true);


$pdf->ln(4);
$pdf->SetFont('Times','',10);
$pdf->Write(5,'De sexe-');
$pdf->SetFont('Times','',8);
$pdf->Write(5,'sex');
$pdf->SetFont('Times','b',10);
$pdf->SetXY(25,75);
$pdf->Cell(25,0,"masculin",0,0,'C',true);
$pdf->SetXY(70,76);
$pdf->SetFont('Times','',10);
$pdf->Cell(5,0,"..................................................................................................",0,0,'C',true);

// information du pere

$pdf->ln(3);
$pdf->SetFont('Times','',10);
$pdf->Write(5,'De -');
$pdf->SetFont('Times','',8);
$pdf->Write(5,'Of');
$pdf->SetFont('Times','b',10);
$pdf->SetXY(25,80);
$pdf->Cell(60,0,"omgba onana simon pierre",0,0,'C',true);
$pdf->SetXY(60,81);
$pdf->SetFont('Times','',10);
$pdf->Cell(5,0,"..................................................................................................",0,0,'C',true);


$pdf->ln(2);
$pdf->SetFont('Times','',10);
$pdf->Write(5,'Ne a-');
$pdf->SetFont('Times','',8);
$pdf->Write(5,'Born at');
$pdf->SetFont('Times','b',10);
$pdf->SetXY(25,85);
$pdf->Cell(25,0,"akonolinga",0,0,'C',true);
$pdf->SetXY(70,86);
$pdf->SetFont('Times','',10);
$pdf->Cell(5,0,"..................................................................................................",0,0,'C',true);
 
$pdf->ln(2);
$pdf->SetFont('Times','',10);
$pdf->Write(5,'Domicilie a');
$pdf->ln(2.5);
$pdf->SetFont('Times','',8);
$pdf->Write(5,'Resident at');
$pdf->SetFont('Times','b',10);
$pdf->SetXY(25,90);
$pdf->Cell(25,0,"akonolinga",0,0,'C',true);
$pdf->SetXY(62,91);
$pdf->SetFont('Times','',10);
$pdf->Cell(5,0,"..................................................................................................",0,0,'C',true);

$pdf->ln(3);
$pdf->SetFont('Times','',10);
$pdf->Write(5,'profession-');
$pdf->SetFont('Times','',8);
$pdf->Write(5,'Occupation');
$pdf->SetFont('Times','b',10);
$pdf->SetXY(35,95);
$pdf->Cell(25,0,"pecheur",0,0,'C',true);
$pdf->SetXY(80,96);
$pdf->SetFont('Times','',10);
$pdf->Cell(5,0,"..................................................................................................",0,0,'C',true);


// information de la mere
$pdf->ln(2);
$pdf->SetFont('Times','',10);
$pdf->Write(5,'Et de');
$pdf->SetFont('Times','',8);
$pdf->Write(5,'-And of');
$pdf->SetFont('Times','b',10);
$pdf->SetXY(20,100);
$pdf->Cell(60,0,"eyenga ma'a denise",0,0,'C',true);
$pdf->SetXY(70,101);
$pdf->SetFont('Times','',10);
$pdf->Cell(5,0,"..................................................................................................",0,0,'C',true);

$pdf->ln(3);
$pdf->SetFont('Times','',10);
$pdf->Write(5,'Ne a-');
$pdf->SetFont('Times','',8);
$pdf->Write(5,'Born at');
$pdf->SetFont('Times','b',10);
$pdf->SetXY(25,106);
$pdf->Cell(25,0,"akonolinga",0,0,'C',true);
$pdf->SetXY(68,107);
$pdf->SetFont('Times','',10);
$pdf->Cell(5,0,"..................................................................................................",0,0,'C',true);

$pdf->ln(3);
$pdf->SetFont('Times','',10);
$pdf->Write(5,'le -');
$pdf->SetFont('Times','',8);
$pdf->Write(5,'On the');
$pdf->SetFont('Times','b',10);
$pdf->SetXY(25,112);
$pdf->Cell(25,0,"",0,0,'C',true);
$pdf->SetXY(65,113);
$pdf->SetFont('Times','',10);
$pdf->Cell(5,0,"..................................................................................................",0,0,'C',true);

$pdf->ln(2);
$pdf->SetFont('Times','',10);
$pdf->Write(5,'Domicilie a');       
$pdf->ln(2.5);
$pdf->SetFont('Times','',8);
$pdf->Write(5,'Resident at');
$pdf->SetFont('Times','b',10);
$pdf->SetXY(25,116);
$pdf->Cell(25,0,"akonolinga",0,0,'C',true);
$pdf->SetXY(70,117);
$pdf->SetFont('Times','',10);
$pdf->Cell(5,0,"..................................................................................................",0,0,'C',true);


$pdf->ln(5);
$pdf->SetFont('Times','',10);
$pdf->Write(5,'profession-');
$pdf->SetFont('Times','',8);
$pdf->Write(5,'Occupation');
$pdf->SetFont('Times','b',10);
$pdf->SetXY(40,124);
$pdf->Cell(25,0,"menagere",0,0,'C',true);
$pdf->SetXY(80,125);
$pdf->SetFont('Times','',10);
$pdf->Cell(5,0,"..................................................................................................",0,0,'C',true);

// information concernant la date de l etablissement de l acte de naissance

$pdf->ln(2);
$pdf->SetFont('Times','',10);
$pdf->Write(5,'dresser le');
$pdf->ln(2.5);
$pdf->SetFont('Times','',8);
$pdf->Write(5,'Draw up on the');
$pdf->SetFont('Times','b',10);
$pdf->SetXY(25,130);
$pdf->Cell(60,0,"quatorze fevrier 1999",0,0,'C',true);
$pdf->SetXY(70,131);
$pdf->SetFont('Times','',10);
$pdf->Cell(5,0,"..................................................................................................",0,0,'C',true);

//inforamtion de celui qui effectue la declaration de naissance en ligne

$pdf->ln(5);
$pdf->SetFont('Times','',10);
$pdf->Write(5,'sur la declaration de');
$pdf->ln(2.5);
$pdf->SetFont('Times','',8);
$pdf->Write(5,'In accordance whith the declaration of');
$pdf->SetFont('Times','b',10);
$pdf->SetXY(50,140);
$pdf->Cell(60,0,"omgba onana simon pierre",0,0,'C',true);
$pdf->SetXY(95,141);
$pdf->SetFont('Times','',10);
$pdf->Cell(5,0,"..................................................................................................",0,0,'C',true);

$pdf->ln(5);
$pdf->SetFont('Times','b',10);
$pdf->SetXY(25,145);
$pdf->Cell(25,0,"pere de l enfant",0,0,'C',true);
$pdf->SetXY(55,146);
$pdf->SetFont('Times','',10);
$pdf->Cell(5,0,"..................................................................................................",0,0,'C',true);


// information sur les temoin et officier d etat civil

$pdf->ln(2);

$pdf->SetFont('Times','',10);
$pdf->Write(5,'lesquels ont certifie la sinceriter de la presente declaration,');
$pdf->ln(3);

$pdf->SetFont('Times','',8);
$pdf->Write(5,'who attested the truth of this declaration,');
$pdf->ln(3);
$pdf->Write(5,'Par nous');
$pdf->SetFont('Times','b',10);
$pdf->SetXY(6,159);
$pdf->Cell(90,0,"Mme fana marguerite\n   officier",0,0,'C',true);
$pdf->SetXY(65,160);
$pdf->SetFont('Times','',10);
$pdf->Cell(5,0,"..................................................................................................",0,0,'C',true);

// agent d etat civil ayant etablie l acte de naissance

$pdf->ln(3);
$pdf->SetFont('Times','b',10);
$pdf->Write(5,'De l etat civil du centre de');
$pdf->ln(3);
$pdf->SetFont('Times','',8);
$pdf->Write(5,'By us,civil status register for');
$pdf->SetFont('Times','b',10);
$pdf->SetXY(60,166);
$pdf->Cell(25,0,"akonolinga",0,0,'C',true);
$pdf->SetXY(90,167);
$pdf->SetFont('Times','',10);
$pdf->Cell(5,0,"..................................................................................................",0,0,'C',true);

$pdf->ln(5);
$pdf->SetFont('Times','',10);
$pdf->Write(5,'Assister de ');
$pdf->ln(2.5);
$pdf->SetFont('Times','',8);
$pdf->Write(5,'In presence of');
$pdf->SetFont('Times','b',10);
$pdf->SetXY(57,175);
$pdf->Cell(25,0,"efondom essimbi jean marie andre simon",0,0,'C',true);
$pdf->SetXY(67,176);
$pdf->SetFont('Times','',10);
$pdf->Cell(5,0,"..................................................................................................",0,0,'C',true);

//signature du secretaire d etat civile








// fonction qui permet de charger l acte de naissance dans le disque dur
$pdf->Output("copy.pdf","F");
?>