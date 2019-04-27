<?PHP
include "commandeC.php";
$employeC=new commandeC();
if (isset($_POST["idC"])){
	$employeC->supprimerCommande($_POST["idC"]);
	header('Location: formSupC.php');
}

?>