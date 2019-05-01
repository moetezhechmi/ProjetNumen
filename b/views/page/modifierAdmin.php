<?php
require_once ('../PHPMailer/PHPMailerAutoload.php');
include "../../cores/adminC.php";
include "../../entities/admin.php";
session_start();

if (isset($_POST['bttmodifier']) and isset($_POST['username']) and isset($_POST['email'])){
$admin1=new Admin($_POST['username'],$_POST['email']);
$admin1C=new AdminC();
$admin1C->modifierAdmin($admin1,$_POST['username']);


if (isset($_POST['bttmodifier'])){
	$username =$_POST['username'];
	$email =$_POST['email'];
	
	


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


		header('Location: index1.php');
		
		
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}





	
}else{
	echo "vérifier les champs";
}


?>