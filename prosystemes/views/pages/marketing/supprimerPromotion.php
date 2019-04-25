<?PHP
include "../../../cores/promotionC.php";
$promotionC=new PromotionC();
if (isset($_POST["id_produit"])){
	$promotionC->supprimerPromotion($_POST["id_produit"]);
	header('Location: promo4.php');
}

?>