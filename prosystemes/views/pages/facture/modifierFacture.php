<?PHP
include "facture.php";
include "factureC.php";

if (isset($_POST['idF']) and isset($_POST['idC']) and isset($_POST['prix'])){
$employe1=new facture($_POST['idF'],$_POST['idC'],$_POST['prix']);
$employe1C=new factureC();
$employe1C->modifierFacture($employe1,$_POST['idF']);
header('Location: formModF.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>