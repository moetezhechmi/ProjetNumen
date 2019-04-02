<?PHP
include "installation.php";
include "installationC.php";

if (isset($_POST['numero_inst']) and isset($_POST['id_client'])  and isset($_POST['nombre_produit']) and isset($_POST['progres'])and isset($_POST['prix'])and isset($_POST['date_debut'])and isset($_POST['delai'])){
$installation1=new Installation($_POST['numero_inst'],$_POST['id_client'],$_POST['nombre_produit'],$_POST['progres'],$_POST['prix'],$_POST['date_debut'],$_POST['delai']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$installation1C=new InstallationC();
$installation1C->ajouterInstallation($installation1);
header('Location: inst2.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>