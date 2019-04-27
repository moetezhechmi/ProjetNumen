<?PHP
include "employeC.php";
$employeC=new factureC();
if (isset($_POST["idF"])){
	$employeC->supprimerFacture($_POST["idF"]);
	header('Location: fixed.php');
}

?>