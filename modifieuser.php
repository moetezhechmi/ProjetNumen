<?php
require_once ('../PHPMailer/PHPMailerAutoload.php');
session_start();

if (isset($_POST['bttmodifier'])){
	require 'connect.php';
	
	$code =$_POST['code'];
	$ville =$_POST['ville'];
	$num =$_POST['num'];
	$email = $_POST['email'];
	
	

	
	

	$query="UPDATE `client` SET `code_postal` =' ".$code."', `ville` = ' ".$ville."', `num_tel` = ' ".$num."', `email` =' ".$email."' WHERE `client`.`id` = ' ".$_SESSION['id']."'";

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

				$mail->Subject = "modifier";
				$mail->Body    = "helle";
				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
				//if ($chemin!="")
				//	$mail->AddAttachment($chemin);
				$mail->send();

	
	if (mysqli_query($con, $query)) {
		header('Location: http://localhost/front/views/categories.html');
		
		
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
?>
