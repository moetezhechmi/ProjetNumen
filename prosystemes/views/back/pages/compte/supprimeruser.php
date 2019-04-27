<?php
//require_once ('../PHPMailer/PHPMailerAutoload.php');
if (isset($_POST['del'])){
	require 'connect.php';
	$id =$_POST['id'];

	$email = $_POST['email'];
	
	
	$query=" DELETE FROM `client` WHERE `client`.`id` = ' ".$id."' ";

//		$mail = new PHPMailer;

				
//				$mail->isSMTP();
//				$mail->Host = 'smtp.gmail.com';  
/*				$mail->SMTPAuth = true;          
				$mail->Username = 'midoun.tv@gmail.com'; 
				$mail->Password = 'destroyersblue';      
				$mail->SMTPSecure = 'tls';               
				$mail->Port = 587;                       

				$mail->setFrom('midoun.tv@gmail.com', "merci"); //ehdb no reply
				$mail->addAddress($email);
				$mail->addReplyTo('midoun.tv@gmail.com', 'Information');

				$mail->isHTML(true);                                  

				$mail->Subject = "suppression";
				$mail->Body    = "hello";
				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
				//if ($chemin!="")
				//	$mail->AddAttachment($chemin);
				$mail->send();
*/
	
	if (mysqli_query($con, $query)) {
		header('Location: listeuser.php');
		
		
} else {
    echo "Error: " ;
}
}
?>
