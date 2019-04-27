<?PHP
include "../../../cores/evenementC.php";
$evenementC=new EvenementC();
if (isset($_POST["nom"])){
	$evenementC->supprimerEvenement($_POST["nom"]);
	header('Location: fixed4.php');
}

?>