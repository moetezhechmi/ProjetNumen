<?PHP
require_once ('../PHPMailer/PHPMailerAutoload.php');
include "../../cores/clientC.php";
include "../../entities/client.php";


        



		if (isset($_POST['bttsign'])){
			

        $lgkey=15;
        $key="";
        for($i=1;$i<=$lgkey;$i++)
        {

        	$key.=rand(0,15);
        }

		    $client1=new client($_POST['nom'],$_POST['prenom'],$_POST['date'],$_POST['sexe'], $_POST['code'],$_POST['ville'],$_POST['num'],$_POST['email'],$_POST['password']);
			$client1C=new ClientC();
			$client1C->ajouterClients($client1,$key);
	        
	       


		$mail = new PHPMailer;

				
				$mail->isSMTP();
				$mail->Host = 'smtp.gmail.com';  
				$mail->SMTPAuth = true;          
				$mail->Username = 'proprosystemes@gmail.com'; 
				$mail->Password = 'propropro';      
				$mail->SMTPSecure = 'tls';               
				$mail->Port = 587;                       

				$mail->setFrom('proprosystemes@gmail.com', "Confirmation de compte"); //ehdb no reply
				$mail->addAddress($_POST['email']);
				$mail->addReplyTo('proprosystemes@gmail.com', 'Information');

				$mail->isHTML(true);                                  

				$mail->Subject = "inscription";
				$mail->Body    = '
                  <html>
                     <body>
                         <div align="center">
                             <a href="http://localhost/b/views/clients/confirmation.php?email='.urldecode($_POST['email']).'&key='.$key.'"> Confirmez votre compte !</a>
                         </div>
                   </html>                

				';
				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
				//if ($chemin!="")
				//	$mail->AddAttachment($chemin);
				$mail->send();


		header('Location: index.php');
		
		
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



?>