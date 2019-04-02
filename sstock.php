<?php
include "config.php";
include "stock.php";
$c=new config();
$conn=$c->getConnection();
$mouhib=new stock(2486,22);

if (isset($_POST["Supprimer"]))
{
	$id=(int)$_POST['quantite'];
	$mouhib->supprimer($id,$conn);
}

header('LOCATION:mouhib.html');
?>