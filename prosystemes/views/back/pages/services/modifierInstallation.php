<?PHP
include "../../../entites/installation.php";
include "../../../cores/installationC.php";

if (isset($_POST['numero_inst']) and isset($_POST['id_client']) and isset($_POST['nombre_produit']) and isset($_POST['progres'])and isset($_POST['prix']) and isset($_POST['date_debut']) and isset($_POST['date_fin'])){
$installation1=new Installation($_POST['numero_inst'],$_POST['id_client'],$_POST['nombre_produit'],$_POST['progres'],$_POST['prix'],$_POST['date_debut'],$_POST['date_fin']);
$installation1C=new InstallationC();
$installation1C->modifierInstallation($installation1,$_POST['numero_inst']);
header('Location: inst3.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>