<?php 
require"_panier.php";
include"config.php";
require"produit.php";

$c=new config();
$panier= new panier($c);
$e=new produit(69,"dell","noir","laptop","1998-05-03");

if(isset($_GET['codeProd'])){
	$product=$c->query('select codeProd from produit where codeProd=:codeProd' , array('codeProd'=> $_GET['codeProd']));
	if(empty($product)){
		die("ce produit n'existe pas");
	}
	$panier->add($product[0]->codeProd);
	die('le prod a ete bien ajoute a votre panier <a href="javascript:history.back()"> retour</a>');
}else{
	die("Vous n'avez pas selectionne de produit a ajouter au panier");
}
?>