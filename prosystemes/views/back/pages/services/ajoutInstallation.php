<?PHP
include "../../../entites/installation.php";
include "../../../cores/installationC.php";

if (isset($_POST['id_client'])  and isset($_POST['nombre_produit']) and isset($_POST['progres'])and isset($_POST['prix'])and isset($_POST['date_debut'])and isset($_POST['date_fin'])){
$installation1=new Installation(0,$_POST['id_client'],$_POST['nombre_produit'],$_POST['progres'],$_POST['prix'],$_POST['date_debut'],$_POST['date_fin']);
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