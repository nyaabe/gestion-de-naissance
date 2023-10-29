<?php 

	use PHPMailer/PHPMailer/PHPMailer:


	if (isset($_POST['name']) && isset($_POST['email'])) {
		

		$name=$_REQUEST['name'];
		$email=$_REQUEST['email'];
		$body=$_REQUEST['body'];
		$subject=$_REQUEST['subject'];

		require 'PHPMailer/Exception.php';
		require 'PHPMailer/PHPMailer.php';
			require 'PHPMailer/SMTP.php';



$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';               //Adresse IP ou DNS du serveur SMTP
$mail->Port = 465;                          //Port TCP du serveur SMTP
$mail->SMTPAuth = true;                        //Utiliser l'identification
$mail->CharSet = 'UTF-8';

   $mail->SMTPSecure = 'ssl';               //Protocole de sécurisation des échanges avec le SMTP
   $mail->Username   =  'nyastephane05@gmail.com';    //Adresse email à utiliser
   $mail->Password   =  '@konolinga';         //Mot de passe de l'adresse email à utiliser   


   $mail->isHTML(true);
   $mail->setFrom($email,$name);
   $mail->addAddress("ericlaverel@mail.com");
   $mail->Subject($subject);
   $mail->Body($body);


if (!$mail->send()) {
      echo $mail->ErrorInfo;
} else{
      echo 'Message bien envoyé';
}


	}


 ?>
 <!-- local.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
      
                if (local.getSelectedItemId()==0){ -->