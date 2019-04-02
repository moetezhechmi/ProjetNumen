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


require_once('PHPMailerAutoload.php');
$mail=new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth();
$mail->SMTPSecure='ssl';
$mail->Host='smtp.gmail.com';
$mail->Port='465';
$mail->isHTML();
$mail->Username='ramzi0369@gmail.com';
$mail->Password='ptsdefnbv';
$mail->SetForm('no-reply@howcode.org');
$mail->Subject='H';
$mail->Body='hh';
$mail->AddAddress('ramzi0369@gmail.com');
$mail->Send();

header('Location: fixed.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>