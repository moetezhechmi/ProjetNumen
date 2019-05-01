<?PHP
require_once ('../PHPMailer/PHPMailerAutoload.php');
include "../../cores/adminC.php";
include "../../entities/admin.php";


if (isset($_POST['bttsign']) and isset($_POST['username']) and isset($_POST['email']) and isset($_POST['password'])){
$admin1=new Admin($_POST['username'],$_POST['email'],$_POST['password']);

$admin1C=new AdminC();
$admin1C->ajouterAdmins($admin1);


if (isset($_POST['bttsign'])){
	$username =$_POST['username'];
	$email =$_POST['email'];
	$password =$_POST['password'];
	


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