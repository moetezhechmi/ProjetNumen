
<?PHP
include "employe.php";
include "employeC.php";
$employe1C=new factureC();
$listeEmployes=$employe1C->afficherFactures();
	header('Location: fixed.html');
}else{
	echo "vérifier les champs";
}
//*/

?>

