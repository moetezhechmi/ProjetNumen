<?php
require_once ('../PHPMailer/PHPMailerAutoload.php');
session_start();

if (isset($_POST['bttsign'])){
	require 'connect.php';
	$prenom =$_POST['prenom'];
	$nom =$_POST['nom'];
	$date_naissance =$_POST['date'];
	$sexe =$_POST['sexe'];
	$code =$_POST['code'];
	$ville =$_POST['ville'];
	$num =$_POST['num'];

	$email = trim($_POST['email']);
	$password = trim($_POST['pwd']);
	

	
	$query="INSERT INTO client( nom , prenom, date_naissance, sexe, code_postal, ville, num_tel, email, password) VALUES (". "'".$nom."',' ".$prenom."',' ".$date_naissance."',' ".$sexe."',' ".$code."',' ".$ville."',' ".$num."',' ".$email."',' ".$password."')";

		$mail = new PHPMailer;

				
				$mail->isSMTP();
				$mail->Host = 'smtp.gmail.com';  
				$mail->SMTPAuth = true;          
				$mail->Username = 'midoun.tv@gmail.com'; 
				$mail->Password = 'destroyersblue';      
				$mail->SMTPSecure = 'tls';               
				$mail->Port = 587;                       

				$mail->setFrom('midoun.tv@gmail.com', "merci"); //ehdb no reply
				$mail->addAddress($email);
				$mail->addReplyTo('midoun.tv@gmail.com', 'Information');

				$mail->isHTML(true);                                  

				$mail->Subject = "inscrit";
				$mail->Body    = "helle";
				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
				//if ($chemin!="")
				//	$mail->AddAttachment($chemin);
				$mail->send();

	
	if (mysqli_query($con, $query)) {
		header('Location: categories.html');
		
		
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>
