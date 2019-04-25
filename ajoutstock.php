<?php
include "config.php";
include "stock.php";
$c=new config();
$conn=$c->getConnection();
$e=new stock(50,150);
if(isset($_POST['Ajouter'])){
$soi=new stock($_POST['quantite'],$_POST['codeprod']);
$soi->ajouter($soi,$conn);

}

header('LOCATION:astock.html');
?>