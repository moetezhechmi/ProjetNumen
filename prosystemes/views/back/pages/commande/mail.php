<?php
require_once ('../PHPMailer/PHPMailerAutoload.php');
include('connect.php');

if(!empty($_POST)){
	extract($_POST);
	$valid=true;
$new_pass=rand(700,1000);

if (isset($_POST['recup_submit'])) {
		$recup_mail=htmlentities(strtolower(trim($recup_mail)));
		if(empty($recup_mail)){
			$valid= false;
			$er_mail="il faut un mail";
		}
		if ($valid) {
			$verification_mail="SELECT * FROM client WHERE email = '".$recup_mail."'";
			$result = mysqli_query($con,$verification_mail);
			if(mysqli_num_rows($result)==1) {
				 while ($row=mysqli_fetch_row($result))
				 {
				
					
					$req="UPDATE client SET password='".$new_pass."' WHERE email= '".$recup_mail."'";
					$res = mysqli_query($con,$req);
					echo "ok";
					$mail = new PHPMailer;

				
					$mail->isSMTP();
					$mail->Host = 'smtp.gmail.com';  
					$mail->SMTPAuth = true;          
					$mail->Username = 'midoun.tv@gmail.com'; 
					$mail->Password = 'destroyersblue';      
					$mail->SMTPSecure = 'tls';               
					$mail->Port = 587;                       

					$mail->setFrom('ramzi0369@gmail.com', "merci"); //ehdb no reply
					$mail->addAddress($recup_mail);
					$mail->addReplyTo('midoun.tv@gmail.com', 'Information');

					$mail->isHTML(true);                                  

					$mail->Subject = "commande passe";
					$mail->Body    = "votre commande est passe merci: ";
					$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
					//if ($chemin!="")
					//	$mail->AddAttachment($chemin);
					$mail->send();

				
			     }

			}

		}
	}
}

?>