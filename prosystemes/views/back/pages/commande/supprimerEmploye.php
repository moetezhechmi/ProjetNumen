<?PHP
include "employeC.php";
$employeC=new commandeC();
if (isset($_POST["idC"])){
	$employeC->supprimerCommande($_POST["idC"]);
	header('Location: fixed.php');
}

?>