<?PHP
include "../../cores/adminC.php";
$adminC=new AdminC();
if (isset($_POST["id"])){
	$adminC->supprimerAdmin($_POST["id"]);
	header('Location: afficherAdmin.php');
}

?>