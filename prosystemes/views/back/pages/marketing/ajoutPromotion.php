<?PHP
include "../../../cores/promotionC.php";
include "../../../entites/promotion.php";

if (isset($_POST['id_produit']) and isset($_POST['pourcentage']) and isset($_POST['date_debut']) and isset($_POST['date_fin'])){
$promotion1=new Promotion($_POST['id_produit'],$_POST['pourcentage'],$_POST['date_debut'],$_POST['date_fin']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$promotion1C=new PromotionC();
$promotion1C->ajouterPromotion($promotion1);
header('Location: promo2.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>