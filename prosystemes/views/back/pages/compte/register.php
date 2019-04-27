<?php
//require_once ('../PHPMailer/PHPMailerAutoload.php');


if (isset($_POST['bttsign'])){
	require 'connect.php';
	$username =$_POST['username'];
	$email =$_POST['email'];
	$password =$_POST['password'];
	
	

	$email = trim($_POST['email']);
	$password = trim($_POST['password']);
	

	
	$query="INSERT INTO admin( username , email, password) VALUES (". "'".$username."',' ".$email."',' ".$password."')";

		/*$mail = new PHPMailer;

				
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
				$mail->send();*/

	
	if (mysqli_query($con, $query)) {
		header('Location: ../marketing/fixed.php');
		
		
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
?>
