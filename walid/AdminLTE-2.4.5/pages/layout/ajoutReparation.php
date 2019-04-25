<?PHP
include "reparation.php";
include "reparationC.php";

if (isset($_POST['numero_rep']) and isset($_POST['id_client'])  and isset($_POST['id_produit']) and isset($_POST['nb_panne']) and isset($_POST['progres'])and isset($_POST['prix'])and isset($_POST['responsable'])and isset($_POST['delai'])){
$reparation1=new Reparation($_POST['numero_rep'],$_POST['id_client'],$_POST['id_produit'],$_POST['nb_panne'],$_POST['progres'],$_POST['prix'],$_POST['responsable'],$_POST['delai']);
$reparation1C=new ReparationC();
$reparation1C->ajouterReparation($reparation1);
header('Location: rep2.php');
	
}else{
	echo "vérifier les champs";
}
?>