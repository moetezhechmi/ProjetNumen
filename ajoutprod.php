<?php
include "config.php";
include "produit.php";
$c=new config();
$conn=$c->getConnection();
$e=new produit(2486,"IBM","noir","ordinateur","2019-05-20");
if(isset($_POST['Ajouter']))
{
$myDate = strtotime($_POST["dateC"]);
$myDate = date('Y-m-d H:i:s', $myDate);
$soi=new produit($_POST['codeProd'],$_POST['marque'],$_POST['couleur'],$_POST['typee'],$myDate);
$soi->ajouter($soi,$conn);
}

header('LOCATION:aprod.html');
?>