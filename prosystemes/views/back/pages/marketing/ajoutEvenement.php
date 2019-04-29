<?PHP
include "../../../cores/evenementC.php";
include "../../../entites/evenement.php";
include "../../../cores/userC.php";
include'../commande/PHPMailer/PHPMailerAutoload.php';
if (isset($_POST['nom']) and isset($_POST['description']) and isset($_POST['date_debut']) and isset($_POST['date_fin']) and isset($_POST['ouverture'])){
$clientC=new ClientC();
$clients=$clientC->afficherClients();	
$evenement1=new Evenement($_POST['nom'],$_POST['description'],$_POST['date_debut'],$_POST['date_fin'],$_POST['ouverture']);
$evenement1C=new EvenementC();
$evenement1C->ajouterEvenement($evenement1);
foreach($clients as $clients){
$mail = new PHPMailer;

                
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';  
                $mail->SMTPAuth = true;          
                $mail->Username = 'khaledhaguiga@gmail.com'; 
                $mail->Password = 'khaledhaguiga@yahoo.fr';      
                $mail->SMTPSecure = 'tls';               
                $mail->Port = 587;                       

                $mail->setFrom('khaledhaguiga@gmail.com', "Prosystemes"); //ehdb no reply
                $mail->addAddress($clients['email']);
                $mail->addReplyTo($clients['email'], 'Information');

                $mail->isHTML(true);                                  

                $mail->Subject = "NEW EVENT_".$_POST['nom'];
                $mail->Body    = "Description: ".$_POST['description']."<br>"."Date debut: ".$_POST['date_debut']."<br>"."Date fin: ".$_POST['date_fin']."<br>"."Ouverture: ".$_POST['ouverture'];
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
            }
header('Location: fixed2.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>