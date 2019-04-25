<?php
include "config.php";
include "stock.php";
$c=new config();
$conn=$c->getConnection();


if(isset($_POST['Modifier']))
{
 $id=new stock ($_POST['quantite'],$_POST['codeprod']);
 $id->modifier($id,$conn);
}

header('LOCATION:mouhib.html');
?>