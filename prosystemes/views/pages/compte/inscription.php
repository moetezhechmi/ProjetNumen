<?PHP
include "../entities/user.php";
include "../core/userC.php";

if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['date_naissance']) and isset($_POST['sexe']) and isset($_POST['code_postal'])and isset($_POST['ville'])and isset($_POST['num_tel'])and isset($_POST['email'])and isset($_POST['password'])){

	    $employe1=new employe($_POST['nom'],$_POST['prenom'],$_POST['date_naissance'],$_POST['sexe'],$_POST['code_postal'],$_POST['ville'],$_POST['num_tel'],$_POST['email'],$_POST['password']);



//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$employe1C=new UserC();
$employe1C->ajouterEmploye($employe1);
header('Location: afficherEmploye.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>