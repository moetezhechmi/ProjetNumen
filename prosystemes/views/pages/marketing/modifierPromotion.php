<?PHP
include "../../../cores/promotionC.php";
include "../../../entites/promotion.php";

if (isset($_POST['id_produit']) and isset($_POST['pourcentage']) and isset($_POST['date_debut']) and isset($_POST['date_fin'])){
$promotion1=new Promotion($_POST['id_produit'],$_POST['pourcentage'],$_POST['date_debut'],$_POST['date_fin']);
$promotion1C=new PromotionC();
$promotion1C->modifierPromotion($promotion1,$_POST['id_produit']);
header('Location: promo3.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>