
<?PHP
include "employe.php";
include "employeC.php";
$employe1C=new commandeC();
$listeEmployes=$employe1C->afficherCommandes();
	header('Location: fixed.html');
}else{
	echo "vérifier les champs";
}
//*/

?>

