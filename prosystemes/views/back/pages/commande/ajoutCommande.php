<?PHP
include "commande.php";
include "commandeC.php";
include "PHPMailer/class.phpmailer.php";

if (isset($_POST['idC']) and isset($_POST['idClient']) and isset($_POST['idP']) and isset($_POST['dateL'])){
$employe1=new commande($_POST['idC'],$_POST['idClient'],$_POST['idP'],$_POST['dateL']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$today=date("Y-m-d");
if($today >$_POST['dateL'] ){
	echo "date de livraison ne peut pas etre avant la date courante";
	}
else{
$employe1C=new commandeC();
$employe1C->ajouterCommande($employe1);

header('Location: mailCommande.php');
	
}

}
?>