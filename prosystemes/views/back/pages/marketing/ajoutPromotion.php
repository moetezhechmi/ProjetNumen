<?PHP
include "../../../cores/promotionC.php";
include "../../../entites/promotion.php";
include "../../../cores/userC.php";
include'../commande/PHPMailer/PHPMailerAutoload.php';
if (isset($_POST['id_produit']) and isset($_POST['pourcentage']) and isset($_POST['date_debut']) and isset($_POST['date_fin'])){
$clientC=new ClientC();
$clients=$clientC->afficherClients();	
$promotion1=new Promotion($_POST['id_produit'],$_POST['pourcentage'],$_POST['date_debut'],$_POST['date_fin']);
$promotion1C=new PromotionC();
if($promotion1C->ajouterPromotion($promotion1)){
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

                $mail->Subject = "Nouvelle Promotion";
                $mail->Body    = "Code du Produit: ".$_POST['id_produit']."<br>"."Date debut: ".$_POST['date_debut']."<br>"."Date fin: ".$_POST['date_fin']."<br>"."Pourcentage: ".$_POST['pourcentage'];
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
            }
header('Location: promo2.php');
	}
	else{
	echo "<script> alert ('Verifier si le Produit existe ou non')</script>";
}
}else{
	echo "verifier les champs";
}
//*/

?>