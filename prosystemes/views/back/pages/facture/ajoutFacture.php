<?PHP
include "facture.php";
include "factureC.php";

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

header('Location: formAjF.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>