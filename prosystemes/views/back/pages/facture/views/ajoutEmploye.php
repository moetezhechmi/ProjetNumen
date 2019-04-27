<?PHP
include "employe.php";
include "employeC.php";

if (isset($_POST['idF']) and isset($_POST['idC']) and isset($_POST['prix'])){
$employe1=new facture($_POST['idF'],$_POST['idC'],$_POST['prix']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$employe1C=new factureC();
$employe1C->ajouterFacture($employe1);


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

	


header('Location: fixed.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>