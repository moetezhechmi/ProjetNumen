<?PHP
include "../../../cores/reparationC.php";
$reparationC=new ReparationC();
if (isset($_POST["numero_rep"])){
	$reparationC->supprimerReparation($_POST["numero_rep"]);
	header('Location: rep4.php');
}

?>