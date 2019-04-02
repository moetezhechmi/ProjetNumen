
<?PHP
include "employe.php";
include "employeC.php";
$employe1C=new EvenementC();
$listeEmployes=$employe1C->afficherEvenements();
	header('Location: fixed.html');
}else{
	echo "vérifier les champs";
}
//*/

?>

