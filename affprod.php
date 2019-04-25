<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Afficher Produit</title>
  </head>
  <body>
    <?php
include"config.php";
include"produit.php";
$c=new config();
$conn=$c->getConnection();
$e=new produit(69,"dell","noir","laptop","1998-05-03");
$e1=new produit(252,"hp","rouge","tel","2015-09-01");
$resultat=$e->afficher($conn);
$e1->afficher($conn);

?>


    <table border="1">
      <tr>
        <td>codeProd</td>
        <td>marque</td>
        <td>couleur</td>
        <td>type</td>
        <td>date</td>
      </tr>
      <tr>
        <?php
foreach ($resultat as $res) {

  ?>
<tr>
  <td><?php echo $res['codeProd']; ?></td>
  <td><?php echo $res['marque']; ?></td>
  <td><?php echo $res['couleur']; ?></td>
  <td><?php echo $res['typee']; ?></td>
  <td><?php echo $res['dateC']; ?></td>


</tr>
<?php
}
 ?>
      </tr>
    </table>
    </fieldset>
  </body>
</html>
