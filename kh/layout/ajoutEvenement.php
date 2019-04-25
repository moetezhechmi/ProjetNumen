<?PHP
include "evenement.php";
include "evenementC.php";

if (isset($_POST['nom']) and isset($_POST['description']) and isset($_POST['date_debut']) and isset($_POST['date_fin']) and isset($_POST['ouverture'])){
$evenement1=new Evenement($_POST['nom'],$_POST['description'],$_POST['date_debut'],$_POST['date_fin'],$_POST['ouverture']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$evenement1C=new EvenementC();
$evenement1C->ajouterEvenement($evenement1);
header('Location: fixed2.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>