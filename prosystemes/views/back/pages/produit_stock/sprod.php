<?php
include "config.php";
include "produit.php";
$c=new config();
$conn=$c->getConnection();
$mouhib=new produit(2486,"IBM","noir","ordinateur","2019-05-20");

if (isset($_POST["Supprimer"]))
{
	$id=(int)$_POST['codeProd'];
	$mouhib->supprimer($id,$conn);
}

header('LOCATION:sprod.html');
?>