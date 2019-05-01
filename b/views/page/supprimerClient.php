<?PHP
include "../../cores/clientC.php";
$clientC=new clientC();
if (isset($_POST["id"])){
  $clientC->supprimerClient($_POST["id"]);
  header('Location: afficherClient.php');
}

?>