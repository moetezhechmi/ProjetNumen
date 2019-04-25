<?PHP
include "commande.php";
include "commandeC.php";

if (isset($_POST['idC']) and isset($_POST['idClient']) and isset($_POST['idP']) and isset($_POST['dateL'])){
$employe1=new commande($_POST['idC'],$_POST['idClient'],$_POST['idP'],$_POST['dateL']);
$employe1C=new commandeC();
$employe1C->modifierCommande($employe1,$_POST['idC']);
header('Location: formModC.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>