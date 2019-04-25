<?PHP
include "factureC.php";
$employeC=new factureC();
if (isset($_POST["idF"])){
	$employeC->supprimerFacture($_POST["idF"]);
	header('Location: formSupF.php');
}

?>