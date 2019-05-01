<?php
require_once ('../PHPMailer/PHPMailerAutoload.php');
include "../../cores/clientC.php";
include "../../entities/client.php";
session_start();

if (isset($_POST['bttmodifier']) and isset($_POST['code']) and isset($_POST['num'])and isset($_POST['ville'])and isset($_POST['email'])){
$client1=new Client($_POST['code'],$_POST['num'],$_POST['ville'],$_POST['email']);
$client1C=new ClientC();
$client1C->modifierClient($client1,$_POST['code']);


if (isset($_POST['bttmodifier'])){

	        $code=$_POST['code'];
			$ville =$_POST['ville'];
			$num =$_POST['num'];
			$email =trim($_POST['email']);
	


		$mail = new PHPMailer;

				
				$mail->isSMTP();
				$mail->Host = 'smtp.gmail.com';  
				$mail->SMTPAuth = true;          
				$mail->Username = 'proprosystemes@gmail.com'; 
				$mail->Password = 'propropro';      
				$mail->SMTPSecure = 'tls';               
				$mail->Port = 587;                       

				$mail->setFrom('proprosystemes@gmail.com', "inscription"); //ehdb no reply
				$mail->addAddress($email);
				$mail->addReplyTo('proprosystemes@gmail.com', 'Information');

				$mail->isHTML(true);                                  

				$mail->Subject = "inscription";
				$mail->Body    = "Felicitation vous etes bien inscrit";
				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
				//if ($chemin!="")
				//	$mail->AddAttachment($chemin);
				$mail->send();


		header('Location: index.php');
		
		
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}





	
}else{
	echo "vérifier les champs";
}


?>